<?php
class ZB_Controller_Action_App extends ZB_Controller_Action
{
    public function preDispatch()
    {
        parent::preDispatch();
        if($this->getRequest()->isXMLHTTPRequest())
        {
            $this->view->layout()->disableLayout();
        }
    }
}
