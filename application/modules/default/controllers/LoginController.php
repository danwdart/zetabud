<?php
class LoginController extends ZB_Controller_Action_App
{
    public function indexAction()
    {
        $form = new ZB_Form();
        $form->setMethod('post');
        $form->setAction('');

        $username = new ZB_Form_Element_Text('username');
        $username->setLabel('Username:');

        $password = new ZB_Form_Element_Password('password');
        $password->setLabel('Password:');

        $submit = new ZB_Form_Element_Submit('Login');

        $register = new ZB_Form_Element_Submit('Register');

        $forgot = new ZB_Form_Element_Submit('Forgot');
        $forgot->setLabel('Forgot Password');

        $form->addElements(array($username, $password, $submit, $register, $forgot));
        $this->view->assign('form', $form);

        if($this->getRequest()->isPost())
        {
            $message = $this->_processRequest();

            if($this->getRequest()->isXMLHTTPRequest())
            {
                $renderer = $this->getHelper('ViewRenderer');
                $renderer->setNoRender(true);
                echo $message;
            }
            else
            {
                $this->view->assign('message', $message);
            }
        }
    }

    private function _processRequest()
    {
        $username = $this->getRequest()->getPost('username');
        $password = $this->getRequest()->getPost('password');

        if(!is_null($this->getRequest()->getPost('Login')))
        {
            if(User::doLogin($username, $password))
            {
                return "Authorised";
            }
            else
            {
                return "Unauthorised";
            }
        }

        elseif(!is_null($this->getRequest()->getPost('Register')))
        {

            if(!User::isValidUsername($username))
            {
                return "Not a Valid Username";
            }

            if(!User::isValidPassword($password))
            {
                return "Not A Valid Password";
            }

            if(User::exists($username))
            {
                return "Username taken";
            }

            try
            {
                $user = new User();
                $user->setUsername($username);
                $user->setPassword(User::encryptPassword($password));
                $user->save();

                return "Created Account";
            }
            catch(Exception $e)
            {
                return "Could not create account.";
            }
        }
        else
        {
            return 'Invalid action.';
        }
    }
}
