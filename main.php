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

function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}

$app->get('/miyagiiturbo/users', function () use ($app, $uc){
    $users = $uc->allAction();
    echo "Users are here!";

    foreach ($users as $user) {
        $jsonified = json_encode($user);
        //echo sprintf("-%s\n", $user->getApiKey());
        echo $jsonified;
    }

});

$app->run();