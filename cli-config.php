<?php
// cli-config.php
require_once "bootstrap.php";
use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Doctrine\ORM\Mapping\Driver\YamlDriver;
use Miyagiiweb\app\EM;

$EM = new EM();
//$driver = new YamlDriver(array('./gw/mappings'));
$driver = new XmlDriver(array('./gw/mappings_xml'));
$EM->Config()->setMetadataDriverImpl($driver);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($EM->EntityManager()->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($EM->EntityManager())
));

return $helperSet;