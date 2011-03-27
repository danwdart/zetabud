<?php
class App_StatusController extends ZB_Controller_Action_App
{
    // Twitter
    private $_consumer_key = 'kKq8R04mOILLxZX0IW8m3w';
    private $_consumer_secret = 'm0SZbdnHoExm8bUf1UZkiu9DmxeO0EMfpwDY9zIKdw';
    private $_site_url = 'http://twitter.com/oauth';
    private $_request_token = 'http://twitter.com/oauth/request_token';
    private $_access_token = 'http://twitter.com/oauth/access_token';
    private $_authorize = 'http://twitter.com/oauth/authorize';
    private $_update_url = 'http://twitter.com/statuses/update.json';
    private $_callback = 'http://zetabud.dandart.co.uk/app/status/callback';

    private $_config;
    private $_session;
    

    public function preDispatch()
    {
        $this->_session = new Zend_Session_Namespace('status');
        parent::preDispatch();

        $this->_config = array(
            'callbackUrl' => $this->_callback,
            'siteUrl' => $this->_site_url,
            'consumerKey' => $this->_consumer_key,
            'consumerSecret' => $this->_consumer_secret
        );
    }

    public function indexAction()
    {
        $this->requireLogin();
        $this->view->assign('apptitle', 'Social Status');

        if(isset($_SESSION['ACCESS_TOKEN']))
        {
            $this->_forward('post');
        }

        $this->_forward('request');
    }

    public function requestAction()
    {
        $consumer = new Zend_Oauth_Consumer($this->_config);
        $token = $consumer->getRequestToken();
        $this->_session->request_token = serialize($token);
        $this->_redirect($consumer->getRedirectUrl());
    }

    public function postAction()
    {
        $message = 'test test from zetabud';
        $token = unserialize($this->_session->access_token);
        $client = $token->getHttpClient($configuration);
        $client->setUri($this->_update_url);
        $client->setMethod(Zend_Http_Client::POST);
        $client->setParameterPost('status', $message);
        $response = $client->request();

        $data = Zend_Json::decode($response->getBody());
        $result = $response->getBody();
        if (isset($data->text))
        {
            die('Success');
        }
        die('Could not post.');
    }


    public function callbackAction()
    {
        $consumer = new Zend_Oauth_Consumer($this->_config);
        if (!empty($_GET) && isset($this->_session->request_token))
        {
             $token = $consumer->getAccessToken( $_GET, unserialize($this->_session->request_token));
             $this->_session->access_token = serialize($token);
             $this->_session->request_token = null;
             $this->_redirect('/app/status/index');
        }
        else
        {
            die('Oops. Malformed request.');
        }

    }
}
