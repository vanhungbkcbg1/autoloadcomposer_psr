<?php
/**
 * Created by PhpStorm.
 * User: vanhung
 * Date: 2/15/2016
 * Time: 7:06 PM
 */

namespace src\myframework;


class Config
{
    public function __construct()
    {
        $data=include _APP_.'/config/database.php';
        var_dump($data);
    }
}