<?php

//$this pointer to the object making the function call.

class  thisLesson{
    public $name = "mg mg";
    public $lastName = "Aye";

    public function changeName(){
       echo  $this->name  = "mg mg Gyi";
    }
}


$fullNameObj = new thisLesson();
$fullNameObj->changeName();


$nameObj = new thisLesson();
echo $nameObj->name;