<?php


function mySetCookie(){
   
    setcookie('ethic','ethical hacking',time()+3600,'/','',0);
}


function myGetCookie(){
    if(isset($_COOKIE['ethic'])){
        echo $_COOKIE['ethic'];
    }else{
        echo "There is no cookie set with that key";
    }
}


function delcookie(){
    setcookie('ethic','ethical hacking',time() - 3600,'/','',0);
}
mySetCookie();
echo myGetCookie();
// delcookie();

?>