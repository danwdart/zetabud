<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload()
    {
        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->registerNamespace('ZB_');
        $autoloader->pushAutoloader(new ZB_Loader_Autoloader_Model(APPLICATION_PATH . '/models/'));
    }

    protected function _initPropel()
    {
        set_include_path(get_include_path() . ':' . implode(':', array(
            APPLICATION_PATH . '/../library/propel/',
            APPLICATION_PATH . '/models/'
        )));

        require_once('Propel.php');
        Propel::init(APPLICATION_PATH . '/config/propel/zetabud-conf.php');
    }
/*
    protected function _initRoutes()
    {
        $router = Zend_Controller_Front::getInstance()->getRouter();

        $route = new Zend_Controller_Router_Route_Regex('.*-p(\d+).htm',
            array(
                'controller' => 'product',
                'action'     => 'index'
            ),
            array(1 => 'id')
        );
        $router->addRoute('product', $route);
    }
*/
}

