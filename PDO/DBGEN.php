<?php

class DBGEN{

    const DB_HOST = "localhost";
    const DB_NAME = "restaurant";
    const DB_USER = "root";
    const DB_PASSWORD = "code5959";


    private $conn;
    private static $instant;

    private function __construct(){
        
        try{
            $this->conn = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME,self::DB_USER,self::DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            if($this->conn){
                echo "success dabase connect success <br> <hr>";
            }
        }catch(Exception $e){
            echo "custom error is "."<br>".$e->getMessage();
        }
    }

    public static function getInstant(){
        if(!self::$instant){
            self::$instant= new DBGEN();
        }
        return self::$instant;
    }
    public function getConn(){
        return $this->conn;
    }

}
