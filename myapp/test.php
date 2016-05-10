<?php

/**
 * Created by PhpStorm.
 * User: vanhung
 * Date: 5/10/2016
 * Time: 11:02 PM
 */
namespace myNameSpace;
class test
{

    public function doSomething()
    {

        $data=[
            "name"=>"vanhung",
            "age"=>28

        ];
        echo json_encode($data);
    }
}