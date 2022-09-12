<?php
// require_once "app/Middleware/Start.php";
// require_once "app/Controler/Home.php";
// require_once "app/Controler/Filter/Filter.php";
// require_once "app/Controler/Sub/Helper.php";
 
require_once "vendor/autoload.php";
class Index{

   public function __construct(){
       
    $start = new Start();
    $start->sayStart();

    $home = new Home();
    $home->sayHome();

    $filter =new Filter();
    $filter->sayFilter();

    $help = new Helper();
    $help->sayHelper();
   }
}

new Index();