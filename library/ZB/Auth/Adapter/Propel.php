<?php
class ZB_Auth_Adapter_Propel implements Zend_Auth_Adapter_Interface
{
    private $_username;
    private $_password;

    public function __construct($username, $password)
    {
        $this->_username = strtolower($username);
        $this->_password = $password;
    }

    public function authenticate()
    {
        $identity = UserQuery::create()
            ->filterByEmail($this->_username)
            ->findOne();

        if(is_null($identity))
        {
            $identity = UserQuery::create()
                ->filterByUsername($this->_username)
                ->findOne();
        }

        if(is_null($identity))
        {
            return new Zend_Auth_Result(Zend_Auth_Result::FAILURE_IDENTITY_NOT_FOUND, null, array('Login Failed.'));
        }

        if(User::encryptPassword($this->_password) == $identity->getPassword())
        {
            return new Zend_Auth_Result(Zend_Auth_Result::SUCCESS, $identity);
        }
        
        return new Zend_Auth_Result(Zend_Auth_Result::FAILURE_IDENTITY_NOT_FOUND, null, array('Login Failed.')); 
    }
}

