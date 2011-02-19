<?php
class LoginController extends ZB_Controller_Action_App
{
    public function indexAction()
    {
        $form = new ZB_Form();
        $form->setMethod('post');
        $form->setAction('/login');

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
            $username = $this->getRequest()->getPost('username');
            $password = $this->getRequest()->getPost('password');

            if(!is_null($this->getRequest()->getPost('Login')))
            {
                if(User::doLogin($username, $password))
                {
                    $this->_messages = "Authorised";
                }
                else
                {
                    $this->_messages = "Unauthorised";
                }
            }

            elseif(!is_null($this->getRequest()->getPost('Register')))
            {

                if(!User::isValidUsername($username))
                {
                    $this->_messages = "Not a Valid Username";
                }

                if(!User::isValidPassword($password))
                {
                    $this->_messages = "Not A Valid Password";
                }

                if(User::exists($username))
                {
                    $this->_messages = "Username taken";
                }

                try
                {
                    $user = new User();
                    $user->setUsername($username);
                    $user->setPassword(User::encryptPassword($password));
                    $user->save();

                    $this->_messages = "Created Account";
                }
                catch(Exception $e)
                {
                    $this->_messages = "Could not create account.";
                }
            }
            else
            {
                $this->_messages = 'Invalid action.';
            }
        }
        $this->view->assign('messages', $this->_messages);
    }
}
