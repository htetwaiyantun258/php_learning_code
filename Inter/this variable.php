<?php

class Main{
    public $name = "May Food";

    public function changeName(){

        $this->name = "May Food Myanamar";

    }
}
$food = new Main();
$food->changeName();
echo $food->name ."<br>";
 
$shop = new Main();
echo $shop->name;

