<?php

    require_once "DBGEN.php";

error_reporting(0);

class DAL
{
    private $db;
    public function __construct()
    {

        $this->db = DBGEN::getInstant()->getConn();

    }

    public function getDishes($id){
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE id =:id");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $stmt->bindColumn("name",$name);
        $stmt->bindColumn("ipadd",$ipadd);
        $stmt->bindColumn("username",$username);
        $stmt->bindColumn("password",$password);
        $stmt->bindColumn("state",$state);
        $stmt->bindColumn("created_at",$created_at);

        $result = $stmt->fetchObject();
        echo $result->name . "<br>";    
        echo $result->ipadd . "<br>";
        echo $result->username . "<br>";
        echo $result->password . "<br>";
        echo $result->state . "<br>";
        echo $result->created_at . "<br>";
    }

    public function getAllShops($state){
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE state=:state");
        $stmt->bindParam(":state",$state);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach($result as $item){
            // echo $item["name"] . "<br>";
            // echo $item["ipadd"] . "<br>"; 

            echo $item->name . "<br>";
            echo $item->ipadd . "<br><hr>";
        }


    }

   
}
new DAL();
