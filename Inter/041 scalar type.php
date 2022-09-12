<?php

class Index{
    public function test(int $str){
        var_dump($str);
    }
}

$ind = new Index();

$ind->test(true); 