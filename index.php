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

//demo twitter connect
$tw=new Twitter("xJmK06x5ZrMAWQB9tATHLW15F","KdeuIwErcp1I0se3fHBBqlGCbdQH8KmM6ZnY3Lmrz87hvFoLTz","730571895565737984-y2SH4f6LYRV4eamUntS0Qj5GrfsyQYo","FI4y8JWgnbOoHE6Pm9OlWHzOUxVw4Q8cj5ZoZnblbqFjO");
$data=$tw->load(Twitter::ME);
print_r($data[0]->user);