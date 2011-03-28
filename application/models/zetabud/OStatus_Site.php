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

} // OStatus_Site
