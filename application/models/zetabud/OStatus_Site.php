<?php
class OStatus_Site extends BaseOStatus_Site
{
    public function getConfig()
    {
        $config = array(
            'callbackUrl' => $this->getCallbackUrl(),
            'siteUrl' => $this->getSiteUrl(),
            'consumerKey' => $this->getConsumerKey(),
            'consumerSecret' => $this->getConsumerSecret()
        );

        return $config;
    }

    public function getCallbackUrl()
    {
        return 'http://' . $_SERVER['HTTP_HOST'] . '/app/status/callback';
    }

} // OStatus_Site
