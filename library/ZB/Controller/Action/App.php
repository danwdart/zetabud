<?php
class ZB_Controller_Action_App extends ZB_Controller_Action
{
    protected $_messages;

    public function postDispatch()
    {
        parent::postDispatch();
        if($this->getRequest()->isXMLHTTPRequest())
        {
            $this->view->layout()->setLayout('app'); // This includes AJAX stuff again
            if(!empty($this->_messages))
            {
                $this->view->layout()->disableLayout();
                $renderer = $this->getHelper('ViewRenderer');
                $renderer->setNoRender(true);
                echo $this->_messages;
            }
        }
    }
}
