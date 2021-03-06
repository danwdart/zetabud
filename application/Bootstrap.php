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
        $path_sep = ':';
        
        // This is sure to slow it down...
        if (strpos(strtoupper(php_uname('s')), 'WIN'))
        {
            $path_sep = ';';
        }

        set_include_path(get_include_path() . $path_sep . implode($path_sep, array(
            APPLICATION_PATH . '/../library/propel/',
            APPLICATION_PATH . '/models/'
        )));

        require_once('Propel.php');
        Propel::init(APPLICATION_PATH . '/config/propel/zetabud-conf.php');
    }

    protected function _initRoutes()
    {
        $router = Zend_Controller_Front::getInstance()->getRouter();
/*
        $route = new Zend_Controller_Router_Route_Regex('.*-p(\d+).htm',
            array(
                'controller' => 'product',
                'action'     => 'index'
            ),
            array(1 => 'id')
        );
        $router->addRoute('product', $route);
 */
        $route = new Zend_Controller_Router_Route_Static(
            'logout',
            array(
                'controller' => 'login',
                'action' => 'logout'
            )
        );

        $router->addRoute('logout', $route);
        
        $route = new Zend_Controller_Router_Route_Static(
            'userinfo',
            array(
                'controller' => 'login',
                'action' => 'userinfo'
            )
        );

        $router->addRoute('userinfo', $route);
    } 

    protected function _initConstants()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/config/zetabud.ini');

        foreach($config->zb->toArray() as $key => $value)
        {
            define(strtoupper($key), $value);
        }
    }

}

