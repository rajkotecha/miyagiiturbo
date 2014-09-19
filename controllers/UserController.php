<?php

namespace Miyagii\Controllers;

require_once __DIR__ . '../bootstrap.php';


class UserController {
    public function allAction () {

        echo "Im here now!";
        $records = $entityManager->EM()
            ->getRepository('Miyagii\Db\Entities\Bundle\Entity\Miyagiiu')
            ->findAll();

        return array('users' => $records);
        //return new Response (json_encode(array('users' => $records)));
    }
} 