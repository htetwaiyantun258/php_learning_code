<?php

class Set{
    private $number = 345;

    
    public function getter(){
        return $this->number;
    }
    
    public function setter(Int $num){
        $this->number = $num;
    }

   
}

$setObj = new Set();
$setObj->setter(3000);
echo $setObj->getter();