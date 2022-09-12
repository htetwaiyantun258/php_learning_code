<?php

include_once "vendor\autoload.php";



class index{

    private $db;
    public function __construct(){

        $this->db = new app\database\DBGen\Data();
        $this->db->dishes(2);
    }
}
new index();