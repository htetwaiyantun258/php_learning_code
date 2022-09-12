<?php


$qry = $_SERVER['QUERY_STRING'];

switch($qry){
    case "home" : header("Location:Home.php");break;
    case "about" : header("Location:About.php");break;
    case "contact" : header("Location:Contact.php");break;
    case "home" : header("Location:Home.php");break;
    default:
        echo "There is not file";
}