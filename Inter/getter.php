<?php


class Get{
   private $name= "aung aung";

    public function getter(){
       return $this->name;
    }
}

$getObj = new Get();
echo $getObj->getter();
// echo $getObj->name; //private member


