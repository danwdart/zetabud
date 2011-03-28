<?php
class OStatus_SitePeer extends BaseOStatus_SitePeer
{
    public static function retrieveAll()
    {
        $sites = OStatus_SiteQuery::create()
            ->find();
        return $sites;
    }

} // OStatus_SitePeer
