<?php



class Index{
    private static $name = "min min";
    private static $instance;

    private function __construct()
    {
        self::$name = "nyi nyi lwin";
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Index();
        }
        return self::$instance;
    }
    public function getName(){
        return self::$name;
    }
}

$ind = Index::getInstance();
echo $ind->getName();