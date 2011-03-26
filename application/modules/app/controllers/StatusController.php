<?php
class App_StatusController extends ZB_Controller_Action_App
{
    public function preDispatch()
    {

    }

    public function callbackAction()
    {
        // Oauth callback thingy
    }

    public function indexAction()
    {
        $this->requireLogin();
        $this->view->assign('apptitle', 'Social Status');
    }
}
