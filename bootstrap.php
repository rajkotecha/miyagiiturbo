<?php namespace Miyagiiweb\app;
// bootstrap.php


require_once "vendor/autoload.php";
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use google\appengine\api\log\LogService;

//Need this for soln to work on GAE
$http_host = $_SERVER['HTTP_HOST'];
if (strpos($http_host,'localhost') === false) {
    echo "detected google host";
    $_SERVER['SERVER_PORT'] = 80;
}

/*** specify extensions that may be loaded ***/
//spl_autoload_extensions('.php');

/*** controller Loader ***/
/*
 function controllerLoader($class)
{
    $filename = strtolower($class) . '.php';
    $file = __DIR__ . '/controllers/' . $filename;
    if (!file_exists($file))
    {
        return false;
    }
    include $file;
}
*/


/*** controller Loader ***/
/*
function gatewayLoader($class)
{
    $filename = strtolower($class) . '.php';
    $file = __DIR__ . '/gw/' . $filename;
    if (!file_exists($file))
    {
        return false;
    }
    include $file;
}
*/

/*** register the loader functions ***/
//spl_autoload_register('Miyagiiweb\app\controllerLoader');
//spl_autoload_register('Miyagiiweb\app\gatewayLoader');

// Create a simple "default" Doctrine ORM configuration for Annotations

class EM
{
    private $entityManager;
    private $isDevMode = true;
    private $config = null;

    function __construct($env = "dev") {

        $paths = array(__DIR__ . '/gw');
        $conn = EM::connectionFactory($env);

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

    private static function connectionFactory($env){
        switch($env){
            case "dev":
                return array (
                    'driver'   => 'pdo_mysql',
                    'user'     => 'raj',
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'dbname'   => 'okinawa',
                );
                break;

            case "prod":
                return array (
                    'driver'   => 'pdo_mysql',
                    'user'     => 'root',
                    'password' => 'miyagiijnbhu87',
                    'dbname'   => 'okinawa',
                    'host'     => '173.194.106.104',
                    'port'     => '3306',
                );
                break;
        }
    }
}