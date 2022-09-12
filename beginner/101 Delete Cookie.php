<?php


function classCookie(){
    setcookie("class","english class",time()+3600,"/","",0);
}



function myGetCookie(){
    if(isset($_COOKIE['class'])){
        echo $_COOKIE['class'];
    }else{
        echo "There is no Cookie Set with that key.";
    }
}

function myDeleteCookie(){
    setcookie('class','english class',time()-3600,"/",0);
}

// classCookie();
// myGetCookie();
myDeleteCookie();