<?php


class Index{
    public function __get($var)
    {
        echo "You are trying to get nonw exist property {$var} <hr>";
    }
    public function __set($var, $value)
    {
        echo "You are trying to set none exist method {$var} with value of {$value}";
    }
}

$obj = new Index();
echo $obj->name;
$obj->age = 45;