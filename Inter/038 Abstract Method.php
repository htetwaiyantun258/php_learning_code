<?php

use People as GlobalPeople;

abstract class AbstractClass{
    public $name = "Min Min";

    public function hobbies(){
        $hobbies = array("fishing","dog training","speaking");
    }

     abstract public function sayMyName();

}

class PeopleOne extends AbstractClass{

    public function sayMyName()
    {
        echo "My name is abstract class over write!";
    }
}

$minmin = new PeopleOne();
$minmin->sayMyName();

//noboody
//class abstract must be
//abstract class extendsလုပ်ရင် method ကိုover writeလုပ်ပေးရတယ်။





?>