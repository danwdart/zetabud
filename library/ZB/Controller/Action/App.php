<?php
class ZB_Controller_Action_App extends ZB_Controller_Action
{
    protected $_messages;

    protected function addMessage(Array $message)
    {
        $this->_messages[] = $message;
    }

    protected function addMessages(Array $messages)
    {
        foreach($messages as $message)
        {
            $this->addMessage($message);
        }
    }

    protected function getMessages()
    {
        return $this->_messages;
    }

    protected function hasMessages()
    {
        return(count($this->getMessages()) > 0);
    }

    protected function drawMessages()
    {
        if(!$this->hasMessages())
        {
            return null;
        }

        $ret = '';

        foreach($this->getMessages() as $message)
        {
            $ret .= '<li class="' . $message['class'] . '">' . $message['text'] . '</li>';
        }

        return $ret;
    }

    protected function messageRedirect()
    {
        if(!$this->hasMessages())
        {
            return false;
        }

        foreach($this->getMessages() as $message)
        {
            if(!is_null($message['redirect']))
            {
                $this->_redirect($message['redirect']);
            }
        }
    }

    public function postDispatch()
    {
        parent::postDispatch();

        if($this->getRequest()->isXMLHTTPRequest())
        {
            $this->view->layout()->setLayout('app'); // This includes AJAX stuff again
        }

        if($this->hasMessages())
        {
            if($this->getRequest()->isXMLHTTPRequest())
            {
                $this->view->layout()->disableLayout();
                $renderer = $this->getHelper('ViewRenderer');
                $renderer->setNoRender(true);
                echo json_encode($this->getMessages());
            }
            else
            {
                $this->messageRedirect();
            }
        }
    }
}
