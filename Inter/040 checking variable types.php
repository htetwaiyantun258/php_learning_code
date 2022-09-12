<?php

class Index {
    public function showTest($some){
        if(is_bool($some)){
            echo "Your passing is $some bool.";
        }
        else{
            echo "Your passing is not bool.";
        }
    }
}
$ind = new Index();

$ind->showTest(true);