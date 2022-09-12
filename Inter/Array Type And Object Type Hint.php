<?php


class Test{

}

class Real{
    public function result(Test $name){

        var_dump($name);

    }
}

$test = new Test();

$real = new Real();
$real->result($test);