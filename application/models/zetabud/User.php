<?php
class User extends BaseUser
{
    const MIN_PASSWORD_LENGTH = 6;
    const MAX_PASSWORD_LENGTH = 255;
    const SALT = 'HC,n1wgt!';
    const SALT_SEPARATOR = ':';

    public static function isValidUsername($username)
    {
        $username_validator = new Zend_Validate_Alnum();

        if($username_validator->isValid($username))
        {
            return true;
        }
        return false;
    } 
    
    public static function isValidEmail($email)
    {
        $email_validator = new Zend_Validate_EmailAddress();

        if($email_validator->isValid($email))
        {
            return true;
        }
        return false;
    }

    public static function isValidPassword($password)
    {
        $string_length = new Zend_Validate_StringLength(self::MIN_PASSWORD_LENGTH, self::MAX_PASSWORD_LENGTH);

        if($string_length->isValid($password))
        {
            return true;
        }

        return false;
    }

    public static function doLogin($username, $password)
    {
        $auth_adapter = new ZB_Auth_Adapter_Propel($username, $password);

        $result = self::getAuth()->authenticate($auth_adapter);

        if($result->isValid())
        {
            return true;
        }

        return false;
    }

    public static function doLogout()
    {
        $auth = self::getAuth();

        if($auth->hasIdentity())
        {
            $auth->clearIdentity();
            return true;
        }

        return false;
    }

    public static function hasIdentity()
    {
        return self::getAuth()->hasIdentity();
    }

    public static function getIdentity()
    {
        return self::getAuth()->getIdentity();
    }

    public static function encryptPassword($password)
    {
        return sha1(self::SALT . self::SALT_SEPARATOR . $password);
    }

    private static function getAuth()
    {
        $auth = Zend_Auth::getInstance();
        $auth->setStorage(new Zend_Auth_Storage_Session('User'));
        return $auth;
    }

    public static function exists($username)
    {
        $user = UserQuery::create()
            ->filterByUsername($username)
            ->findOne();
        if($user instanceof User)
        {
            return true;
        }

        return false;
    }

    public static function isLoggedIn()
    {
        return self::hasIdentity();
    }
} // User
