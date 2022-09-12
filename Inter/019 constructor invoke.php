<?php


class parent_constructor{
        public $name = "Kyaw Kyaw";
        public function __construct()
        {
            echo "papa constructor!";
        }
}

class child extends parent_constructor {
    public $name = "Khin Khin";
    public function __construct()
    {   
        parent:: __construct();
        echo "child constructor";
    }

}

$child = new child();
echo $child->name;