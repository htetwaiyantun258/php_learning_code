<?php

namespace app\database;

class DBGen
{
    private $conn;
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "code5959";
    const DB_NAME = "restaurant";
    public function __construct()
    {
        $this->conn = new \mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
    }
    public function getSingleShop($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE id =?");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        // var_dump($result);
        $stmt->bind_result($id, $name, $ipadd, $username, $password, $state, $created_at);

        while ($stmt->fetch()) {
            echo $id . "<br>" . $name . "<br>" . $ipadd . "<br>" . $username . "<br>" . $password . "<br>" . $created_at;
        }
    }

    public function getMultipleShop($state)
    {
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $stmt->bind_param("i", $state);
        $result = $stmt->execute();
        // $stmt->bind_result($id, $name, $ipadd, $username, $password, $state, $created_at);

        // while ($stmt->fetch()) {
        //     echo $id . "<br>" . $name . "<br>" . $ipadd . "<br>" . $username . "<br>" . $password . "<br>" . $created_at;
        //     echo "<hr>";
        // }

        $result = $stmt->get_result();
        $data = $result->fetch_all();
        
            // echo "<pre>" . print_r($data,true)  . "</pre>";

            foreach($data as $item){
                echo $item[1] ."<br>";
            }
        
    }

    public function getAllData()
    {
        $result = $this->conn->query("SELECT * FROM shops");
        while ($row = $result->fetch_object()) {
            echo $row->name . "<br>";
        }
    }

    public function insertSingleShop($name, $ipadd, $username, $password, $state)
    {
        $date = date("Y-m-d H:m:s");
        $stmt = $this->conn->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at)
        VALUES(?,?,?,?,?,?)");
        $stmt->bind_param("ssssis", $name, $ipadd, $username, $password, $state, $date);
        $result = $stmt->execute();
        echo $result ? "Data Insert Successfully" : "Data Insert Failure";
    }

    public function multiInsert($shops)
    {
        $date = date("Y-m-d H:m:s");
        $stmt = $this->conn->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at)
        VALUES(?,?,?,?,?,?)");
        foreach ($shops as $shop) {
            $stmt->bind_param("ssssis", $shop[0], $shop[1], $shop[2], $shop[3], $shop[4], $date);
            $result = $stmt->execute();
            $lastInsertId = $stmt->insert_id;
            echo $result ? "Date multi insert successfuly" . $shop[0] ."with id of " . $lastInsertId . "<br>": " Date Insert Failure";
        }
    }

    public function updatShopName($name, $id)
    {
        $stmt = $this->conn->prepare("UPDATE shops SET name =? WHERE id=?");
        $stmt->bind_param("si", $name, $id);
        $result = $stmt->execute();
        echo  $result ? "Update Successfuly" : "Update Failure";
    }

    public function delete($id){
        $stmt = $this->conn->prepare("DELETE FROM shops WHERE id=?");
        $stmt->bind_param("i", $id );
        $result = $stmt->execute();
        echo $result ? "Delete Successfuly" : "Delete Failure";
    }
}

