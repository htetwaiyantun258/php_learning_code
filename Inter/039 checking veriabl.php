<?php

use Index as GlobalIndex;

class Index
{
    public function showResult($num){
        if(is_int($num)){
                echo "I am integer $num";
        }else{
            die("We need string Data Type Veriable!");
        }
    }
}
$test = new Index();

$test->showResult("May Be later join!");



?>