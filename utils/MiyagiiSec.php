<?php
/**
 * Created by PhpStorm.
 * User: raj
 * Date: 2014-09-28
 * Time: 11:15 AM
 */

namespace Miyagiiweb\utils;


class MiyagiiSec {
    /*
     * HMAC will consist of:
     * ENCRYPTED (with private key which is never transmitted)
     * - full URL including parameters and path except http or https
     * - timestamp + - 15mins
     * UNENCRYPTED:
     * - full URL including parameters and path except http or https
     * - username which server will use to find private key
     */
} 