<?php

namespace KapitchiProcess;

use Zend\ModuleManager\Manager,
    Zend\Mvc\ApplicationInterface,
    Zend\EventManager\Event,
    KapitchiBase\Module\ModuleAbstract;

class Module extends ModuleAbstract {

    public function onBootstrap(Event $e) {
        parent::onBootstrap($e);

    }

    public function getDir() {
        return __DIR__;
    }

    public function getNamespace() {
        return __NAMESPACE__;
    }

}