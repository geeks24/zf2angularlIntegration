<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Rating;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;


class Module{
    
     public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
?>
