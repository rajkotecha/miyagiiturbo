<?php
require './bootstrap.php';
require_once './vendor/autoload.php';

use Slim\Slim;
use Miyagiiweb\controllers\UserController;
use Miyagiiweb\utils\LogWriter4Slim;
echo "Working with custom log writer....";


$app = new Slim(array(
    'log.writer' => new LogWriter4Slim()
));
$uc = new UserController();

$app->get('/miyagiiturbo/users', function () use ($app, $uc){
    $users = $uc->allAction();
    echo "Users are here!";

    foreach ($users as $user) {
        echo sprintf("-%s\n", $user->getApiKey());
    }
});

$app->run();