<?php
class ZB_Controller_Action extends Zend_Controller_Action
{
    public function preDispatch()
    {
        $this->view->addHelperPath('ZB/View/Helper/', 'ZB_View_Helper');
    }
}
