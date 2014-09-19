<?php namespace Miyagiiweb\app;

// bootstrap.php

require_once "vendor/autoload.php";
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

/*** specify extensions that may be loaded ***/
spl_autoload_extensions('.php');

/*** controller Loader ***/
function controllerLoader($class)
{
    $filename = strtolower($class) . '.php';
    $file ='controllers/' . $filename;
    if (!file_exists($file))
    {
        return false;
    }
    include $file;
}

/*** controller Loader ***/
function gatewayLoader($class)
{
    $filename = strtolower($class) . '.php';
    $file ='gw/' . $filename;
    if (!file_exists($file))
    {
        return false;
    }
    include $file;
}

/*** register the loader functions ***/
spl_autoload_register('Miyagiiweb\app\controllerLoader');
spl_autoload_register('Miyagiiweb\app\gatewayLoader');

// Create a simple "default" Doctrine ORM configuration for Annotations

class EM
{
    private $entityManager;
    private $isDevMode = true;
    private $config = null;

    function __construct() {

        $paths = array(__DIR__ . '/gw');
        $conn = array(
            'driver'   => 'pdo_mysql',
            'user'     => 'raj',
            'host'     => 'localhost',
            'port'     => '3306',
            'dbname'   => 'okinawa',
        );

        //$this->config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/gw"), $this->isDevMode);
        $this->config = Setup::createConfiguration($this->isDevMode);
        $driver = new AnnotationDriver(new AnnotationReader(), $paths);

        // registering noop annotation autoloader - allow all annotations by default
        AnnotationRegistry::registerLoader('class_exists');
        $this->config->setMetadataDriverImpl($driver);

        $this->entityManager = EntityManager::create($conn, $this->config);
    }

    public function EntityManager(){
        if ($this->entityManager == null) throw new \Exception("EntityManager was not constructed properly");

        return $this->entityManager;
    }

    public function Config() {
        if ($this->config == null) throw new \Exception("EntityManager was not constructed properly");

        return $this->config;
    }
}