<?php namespace Miyagiiweb\controllers;

require_once __DIR__ . '/../bootstrap.php';

use Miyagiiweb\app\EM;
use Miyagiiu;

class UserController {
    public function allAction () {

        //echo "Im here now!";
        $EM = new EM();
        $records = $EM->EntityManager()
            ->getRepository('Miyagiiu')
            ->findAll();

        return $records;
    }

    public function addUser ($addUser) {
        $EM = new EM();
        $EM->EntityManager()->persist($addUser);
        $EM->EntityManager()->flush();
    }
}