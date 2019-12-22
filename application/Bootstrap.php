<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
  
    public function _initAutoload()
    {
        $moduleLoader = new Zend_Application_Module_Autoloader(array( 'basePath'=>APPLICATION_PATH, 'namespace'=>''));
        $autoloader = Zend_Loader_Autoloader::getInstance();

        $autoloader->registerNamespace(array('App_'));

        return $moduleLoader;

    }
}


