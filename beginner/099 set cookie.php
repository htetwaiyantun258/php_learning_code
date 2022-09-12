<?php

function mySetCookie(){

    setcookie("resturant","myfood",time()+3600,"/","",0);
    
}

mySetCookie();

function myGetCookie(){
    echo $_COOKIE['resturant'];
}

myGetCookie();