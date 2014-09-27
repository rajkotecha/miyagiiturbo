<?php namespace Miyagiiweb\controllers;

require_once __DIR__ . '/../bootstrap.php';

use Miyagiiweb\app\EM;
use Miyagiiu;

class UserController {
    public function allAction () {

        echo "Im here now!";
        $EM = new EM();
        $records = $EM->EntityManager()
            ->getRepository('Miyagiiu')
            ->findAll();

        return $records;
    }

    public function addUser () {
        $EM = new EM();

        $user = new Miyagiiu();
        $user->setApiKey("ApiKey1234CreatedYaay");
        $now = new \DateTime("now", new \DateTimeZone("America/Toronto"));
        $user->setMiyagiiuCreatedAt($now);
        $EM->EntityManager()->persist($user);
        $EM->EntityManager()->flush();
    }
}