<?php

namespace app\database\dbgen;

use app\database\dbgen;

class Data{

    private $conn;
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "code5959";
    const DB_Name = "restaurant";

    public function __construct(){

        $this->conn = new \mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS);
    }
    public function dishes($id){
        $stmt = $this->conn->prepare("SELECT * FROM dishes WHERE id=?");
        $stmt->bind_Param("i", $id);
        $result = $stmt->execute();
    }
        
}

new Data();