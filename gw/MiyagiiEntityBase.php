<?php
/**
 * Created by PhpStorm.
 * User: raj
 * Date: 2014-09-28
 * Time: 1:20 PM
 */


class MiyagiiEntityBase implements JsonSerializable
{
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