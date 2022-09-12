<?php


require_once "DAL.php";

class index{
   
    public function __construct(){

        $dal = new DAL();
        // $dal->getDishes(1);
        $dal->getAllShops(1);
       


    }
}
new index();