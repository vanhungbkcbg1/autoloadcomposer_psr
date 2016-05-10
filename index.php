<?php
require __DIR__ . '/vendor/autoload.php';
define('_APP_',__DIR__);

$item=new \src\myframework\Sinhvien();
$item->toString();

//test
$test=new \src\laravel\Demo();
$test->String();

//include


$test=new myNameSpace\test();
$test->doSomething();

$db=new \Config\MyDB();
$db->myfunction();