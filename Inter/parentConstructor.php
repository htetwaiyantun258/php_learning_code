<?php

class Parent_Construct{
    public $name = "aye aye";
    public function __construct()
    {   
        
        echo "My Parent Constructor" . "///";
    }
}

class Child_Construct extends Parent_Construct{
    public function __construct()
    {   
        parent::__construct();
        echo "My child Constructor";
    }
}
// $parent = new Parent_Construct();
// echo $parent->name;
$child = new Child_Construct();
echo $child->name;


