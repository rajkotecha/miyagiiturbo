<?php
require './bootstrap.php';
require_once './vendor/autoload.php';

use Slim\Slim;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

echo "Working....";

$app = new Slim();
$uc = new UserController();

$app->get('/miyagiiturbo/users', function () use ($app, $uc){
    $users = $uc->allAction();
    echo "Users are here!";
    $res = $app->response();
    $res['Content-Type'] = 'application/json';
    //$res->body($users);
    $encoders = array(new XmlEncoder(), new JsonEncoder());
    $normalizers = array(new GetSetMethodNormalizer());
    $serializer = new Serializer($normalizers, $encoders);

    $jsonContent = $serializer->serialize($users, 'json');
    echo ($jsonContent);
});

$app->run();