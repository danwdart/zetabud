<?php
class LoginController extends ZB_Controller_Action_App
{
    private $_redirect_url;

    public function preDispatch()
    {
        parent::preDispatch();

        $this->setAppTitle('Login');

        $this->_redirect_url = $this->getReferrer();

        if(strstr($this->_redirect_url, '/login/register') !== false)
        {
            $this->_redirect_url = '/';
        }
    }

    public function indexAction()
    {
        $form = $this->_getLoginForm();

        if($this->isPost())
        {
            $post = $this->getPost();

            $username = $post['username'];
            $password = $post['password'];

            if(isset($post['Login']))
            {
                if(User::doLogin($username, $password))
                {
                    $this->_redirect($this->_redirect_url);
                }
                else
                {
                    $this->addMessage(array(
                        'text' => 'Wrong username or password. Want to try again?',
                        'class' => 'warn'
                    ));
                }
            }

            elseif(isset($post['Register']))
            {
                $this->_redirect('/login/register');
            }

            else
            {
                $this->addMessage(array(
                    'text' => 'Invalid action',
                    'class' => 'error'
                ));
            }
        }

        $this->view->assign('form', $form);
    }

    public function logoutAction()
    {
        $this->view->layout()->disableLayout();
        $renderer = $this->getHelper('ViewRenderer');
        $renderer->setNoRender(true);

        User::doLogout();
        $this->_redirect($this->_redirect_url);
    }

    public function registerAction()
    {
        $this->setAppTitle('Register a new user');

        $form = $this->_getRegisterForm();

        if($this->isPost())
        {
            $post = $this->getPost();

            if(isset($post['Register']))
            {
                $username = $post['username'];
                $password = $post['password'];
                $password2 = $post['password2'];
                $email = $post['email'];
                $fullname = $post['fullname'];

                if($password != $password2)
                {
                    $this->addMessage(array(
                        'text' => 'Passwords must match',
                        'class' => 'warn'
                    ));
                }

                if(!User::isValidEmail($email))
                {
                    $this->addMessage(array(
                        'text' => 'Not a valid Email',
                        'class' => 'warn'
                    ));
                }

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
                        'text' => 'Username already exists',
                        'class' => 'warn'
                    ));
                }
                
                if(is_null($this->getMessages()))
                {
                    try
                    {
                        $user = new User();
                        $user->setUsername($username);
                        $user->setPassword(User::encryptPassword($password));
                        $user->setEmail($email);
                        $user->setFullname($fullname);
                        $user->save();
    
                        $this->addMessage(array(
                            'text' => 'Created Account',
                            'class' => 'warn',
                            'redirect' => '/login'
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
                    'text' => 'Invalid Request',
                    'class' => 'error'
                ));
            }
        }

        $this->view->assign('form', $form);
    }

    private function _getLoginForm()
    {
        $form = new ZB_Form();
        $form->setMethod('post');
        $form->setAction('/login?redirect=' . $this->_redirect_url);

        $username = new ZB_Form_Element_Text('username');
        $username->setLabel('Username:');

        $password = new ZB_Form_Element_Password('password');
        $password->setLabel('Password:');

        $submit = new ZB_Form_Element_Submit('Login');

        $register = new ZB_Form_Element_Submit('Register');

//      $forgot = new ZB_Form_Element_Submit('Forgot');
//      $forgot->setLabel('Forgot Password');

        $form->addElements(array($username, $password, $submit, $register));

        return $form;
    }    

    private function _getRegisterForm()
    {
        $form = new ZB_Form();
        $form->setMethod('post');
        $form->setAction('/login/register');

        $username = new ZB_Form_Element_Text('username');
        $username->setLabel('Username:');

        $password = new ZB_Form_Element_Password('password');
        $password->setLabel('Password:');

        $password2 = new ZB_Form_Element_Password('password2');
        $password2->setLabel('Repeat Password:');

        $fullname = new ZB_Form_Element_Text('fullname');
        $fullname->setLabel('Full Name:');

        $email = new ZB_Form_Element_Text('email');
        $email->setLabel('Email Address:');

        $register = new ZB_Form_Element_Submit('Register');

        $form->addElements(array($username, $password, $password2, $fullname, $email, $register));

        return $form;
    } 
}
