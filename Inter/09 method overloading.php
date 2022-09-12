<?php

class Method_OverLoad{
    public function method($default = 2){
        echo "I am method " . $default;
    }
}

$methodOverLoad = new Method_OverLoad();
$methodOverLoad->method(5);