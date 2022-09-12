<?php


class Build_Construnctor{
    public function __construct($name,$age,$str)
    {
        echo $name . " " . $age . " " . $str ;
    
        
    }
}

$first_con = new Build_Construnctor("I am",23,"year old.");

