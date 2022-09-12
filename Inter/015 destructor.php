<?php

class choice{
    var  $sum = 0;

    public function __construct()
    {
        echo "I am construct .";
    }

    public function loopIt(){
        
        for($i = 0; $i < 100000; $i++){
            $this->sum += $i;
        }
    }
    public function __destruct()
    {
        echo "I am destructor, class work is done!";
    }
}

$obj = new choice();
$obj->loopIt();
