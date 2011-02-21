<?php
class ZB_Controller_Action_App extends ZB_Controller_Action
{
    protected $_messages;

    protected function isAjax()
    {
        return ($this->getRequest()->isXMLHTTPRequest());
    }

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

    protected function setMessage($message)
    {
        $this->_messages = array($message);
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

    protected function clearMessages()
    {
        $this->_messages = null;
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
/*
    protected function _redirect($url)
    {
        if($this->isAjax())
        {
            $this->setMessage(array('redirect' => $url));
        }
        else
        {
            parent::_redirect($url);
        }
    }
 */
    protected function login()
    {
        // TODO: Make this drop down and not quit the page!
        $this->_redirect('/login');
    }

    protected function requireLogin()
    {
        if(!User::hasIdentity())
        {
            $this->login();
        }
    }

    public function postDispatch()
    {
        parent::postDispatch();

        if($this->isAjax())
        {
            $this->view->layout()->setLayout('app'); // This includes AJAX stuff again
        }

        if($this->hasMessages())
        {
            if($this->isAjax())
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
