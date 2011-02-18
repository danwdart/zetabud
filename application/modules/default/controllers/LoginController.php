<?php
class LoginController extends ZB_Controller_Action
{
    public function indexAction()
    {
        $form = new ZB_Form();

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
        }
    }
}

