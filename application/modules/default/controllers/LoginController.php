<?php
class LoginController extends ZB_Controller_Action_App
{
    public function indexAction()
    {
        $redirect = $this->getRequest()->getQuery('redirect');
        $redirect_query = '';
        if(!empty($redirect))
        {
            $redirect_query = '?redirect=' . $redirect;
        }

        $form = new ZB_Form();
        $form->setMethod('post');
        $form->setAction('/login' . $redirect_query);

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
                    if(!empty($redirect_query))
                    {
                        $this->addMessage(array(
                            'text' => 'Authorised',
                            'class' => 'info',
                            'redirect' => $redirect,
                            'callback' => 'Page.refreshHeader();'

                        ));
                    }
                    else
                    {
                        $this->addMessage(array(
                            'text' => 'Authorised',
                            'class' => 'info',
                            'redirect' => '/',
                            'callback' => 'Page.refreshHeader();'

                        ));
                    }
                }
                else
                {
                    $this->addMessage(array(
                        'text' => 'Unauthorised',
                        'class' => 'warn'
                    ));
                }
            }

            elseif(!is_null($this->getRequest()->getPost('Register')))
            {

                if(!User::isValidUsername($username))
                {
                    $this->addMessage(array(
                        'text' => 'Not a Valid Username',
                        'class' => 'warn'
                    ));

                }

                if(!User::isValidPassword($password))
                {
                    $this->addMessage(array(
                        'text' => 'Not A Valid Password',
                        'class' => 'warn'
                    ));
                }

                if(User::exists($username))
                {
                    $this->addMessage(array(
                        'text' => 'Username taken',
                        'class' => 'warn'
                    ));
                }

                if(!$this->hasMessages())
                {
                    try
                    {
                        $user = new User();
                        $user->setUsername($username);
                        $user->setPassword(User::encryptPassword($password));
                        $user->save();

                        $this->addMessage(array(
                            'text' => 'Created Account',
                            'class' => 'warn'
                        ));
                    }
                    catch(Exception $e)
                    {
                        $this->addMessage(array(
                            'text' => 'Could not create account.',
                            'class' => 'error'
                        ));
                    }
                }
            }
            else
            {
                $this->addMessage(array(
                    'text' => 'Invalid action',
                    'class' => 'error'
                ));
            }
        }
        $this->view->assign('messages', $this->drawMessages());
    }

    public function logoutAction()
    {
        $this->view->layout()->disableLayout();
        $renderer = $this->getHelper('ViewRenderer');
        $renderer->setNoRender(true);

        User::doLogout();
        $this->_redirect('/');
    }

}
