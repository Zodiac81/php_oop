<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 24.05.18
 * Time: 16:55
 */

class Ajax
{
    private $city;

    public function getCity($city){

        $this->city = $city;
        return $this->city;
    }


}