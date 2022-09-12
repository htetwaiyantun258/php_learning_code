<?php

class access{
    public $name = "May May";
    private $age = 23;
    protected $email = "maymay@gmail.com";

}

$obj = new access();
echo $obj->name . "<br>";
$obj->name = "Mu Mu";
echo $obj->name;
// echo $obj->age;
// echo $obj->email;

class People{
    public $name ="Aye Aye";
    public function __construct(){
        echo "People construct";
    }
    public function __destruct(){
        echo "People destruct";
    }
    
        
    }
    $humanOne = new People();
    $humanOne->name= "Saung Oo Lay";
    echo $humanOne->name . "/";
    $humanTwo = new People();
    $humanTwo->name = "La Min";
    echo $humanTwo->name . "/";







?>