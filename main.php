<?php
require './bootstrap.php';
require_once './vendor/autoload.php';

use Slim\Slim;
use Miyagiiweb\controllers\UserController;
use Miyagiiweb\utils\LogWriter4Slim;
//echo "Working with custom log writer....";


$app = new Slim(array(
    'log.writer' => new LogWriter4Slim()
));
$uc = new UserController();

$app->get('/miyagiiturbo/users', function () use ($app, $uc){
    $users = $uc->allAction();
    //echo "Users are here!";

    foreach ($users as $user) {
        $jsonified = json_encode($user);
        //echo sprintf("-%s\n", $user->getApiKey());
        echo $jsonified;
    }

});


$app->post('/miyagiiturbo/user', function () use ($app, $uc){
    $request = $app->request();
    $body = $request->getBody();
    $input = json_decode($body);

    $addUser = new Miyagiiu();
    $addUser->setApiKey($input->apiKey);
    $users = $uc->addUser($addUser);
    //echo "add Users are here!";

});


$app->run();