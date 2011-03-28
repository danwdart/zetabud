<?php
class OStatus_UserPeer extends BaseOStatus_UserPeer
{
    public static function retrieveMine()
    {
        $users = OStatus_UserQuery::create()
            ->filterByUser(User::getIdentity())
            ->find();
        return $users;
    }

} // OStatus_UserPeer
