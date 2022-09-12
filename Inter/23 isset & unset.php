<?php

class Index{
    public function __isset($name)
    {
        echo "You are trying check the set or not of <span style='color:red'> " . $name . "</span>  property!";
    }

}

$obj = new Index();
isset($obj->a);