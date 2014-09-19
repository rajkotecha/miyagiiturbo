<?php
// cli-config.php
require_once "bootstrap.php";
USE Doctrine\ORM\Mapping\Driver\YamlDriver;

$driver = new YamlDriver(array('./gw/mappings'));
$config->setMetadataDriverImpl($driver);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($entityManager->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
));

return $helperSet;