<?php
/**
 * Created by PhpStorm.
 * User: Florence
 * Date: 2014-09-24
 * Time: 10:13 PM
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * MiyagiiuExt
 *
 * @ORM\Table(name="miyagiiu")
 * @ORM\Entity
 */
class MiyagiiuExt extends Miyagiiu implements JsonSerializable {

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    public function jsonSerialize()
    {
        $json  = new stdClass();
        foreach ($this as $key => $value)
        {
            $json->$key = $value;
        }

        return $json;
    }
}