<?php namespace Miyagiiweb\app;
// bootstrap.php - need to recommit....


require_once "vendor/autoload.php";
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class AppConfig {
    private $env;
    private $isRemote = false;
    private static $AppConfig;

    private function __construct(){
        $this->env = $env;
        $http_host = $_SERVER['HTTP_HOST'];
        if (strpos($http_host,'localhost') === false) {
            echo "detected google host";
            $_SERVER['SERVER_PORT'] = 80;
            $this->isRemote = true;
            $this->env = "prod";
        }
        else {
            $this->env = "dev";
        }
    }

    public static function AppConfigInstance($env = "dev"){
        if (AppConfig::$AppConfig == null) {
            self::$AppConfig = new AppConfig($env);
        }
        return self::$AppConfig;
    }

    public function Environment() {
        return $this->env;
    }

    //Need this for google app engine / SLIM to play nice
    public function isRemote() {
        return $this->isRemote;
    }
}

AppConfig::AppConfigInstance();

// Create a simple "default" Doctrine ORM configuration for Annotations

class EM
{
    private $entityManager;
    private $isDevMode = true;
    private $config = null;

    function __construct() {

        $env = AppConfig::AppConfigInstance()->Environment();

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
                    'password' => 'okinawazxsw23'
                );
                break;
            // mysql:unix_socket=/cloudsql/<your-project-id>:<your-instance-name>;dbname=<database-name>',
            case "prod":
                return array (
                    'driver'        => 'pdo_mysql',
                    'user'          => 'root',
                    'dbname'        => 'okinawa',
                    'unix_socket'   => '/cloudsql/miyagii-turbo:okinawa',
                    'port'          => '3306',
                );
                break;
        }
    }
}