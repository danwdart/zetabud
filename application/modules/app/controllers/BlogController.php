<?php
class App_BlogController extends ZB_Controller_Action_App
{
    public function indexAction()
    {
        $blogs = BlogQuery::create()
            ->orderByModifiedDate()
            ->find();
        $this->view->assign('blogs', $blogs);
    }
}
