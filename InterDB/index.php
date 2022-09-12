<?php

require_once "vendor/autoload.php";

use app\database\DBGen;

class index
{
    private $db;
    public function __construct()
    {   
        $shops = [
            ["oppo","127.200.001","oppo","789",1],
            ["vivo","127.008.002","vivo","890",1],
            ["mimi","127.002.001","mi","450",1],
            ["itel","129.002.003","itel","709",1]
        ];

        $this->db = new DBGen();
        //$this->db->getSingleShop(1);
        $this->db->getMultipleShop(0);
        //$this->db->getAllData();
        // $this->db->insertSingleShop("iphone","192.001.011","iphone","234",1);
        // $this->db->multiInsert($shops);
        // $this->db->updatShopName("jack ma", 4);
        // $this->db->delete(15);


    }
}

new index();
