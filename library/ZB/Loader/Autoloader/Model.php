<?php
class ZB_Loader_Autoloader_Model implements Zend_Loader_Autoloader_Interface
{
    private $_paths = array();

    public function __construct($paths)
    {
        if(is_array($paths))
        {
            foreach($paths as $path)
            {
                $this->setPath($path);
            }
        }
        else
        {
            $this->setPath($paths);
        }
    }

    public function autoload($class)
    {
        foreach($this->_paths as $path)
        {
            $file = $path . $class . '.php';

            if(file_exists($file))
            {
                require_once($file);
                return true;
            }
        }
        return false;
    }

    private function setPath($path)
    {
        $this->_paths[] = realpath($path) . DIRECTORY_SEPARATOR;
    }
}
