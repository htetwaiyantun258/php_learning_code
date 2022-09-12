<?php

class Author{

    public function bestSeller(){
        echo  "Thet Kaing <hr>";
    }

    public function __call($name, $arguments)
    {
       echo "no exist function name ==>  $name <hr>";
       echo "<pre>" . print_r($arguments,true) . "</pre>";
    }
    
}

$authorBest = new Author();
$authorBest->bestSeller();

$authorBest->choice("Min Luu");

