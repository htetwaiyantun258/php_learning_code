<?php

// echo $_SERVER['HTTP_USER_AGENT'];

// echo $_SERVER["PHP_SELF"]."<br>";
// echo $_SERVER['SERVER_NAME']."<br>";
// echo $_SERVER['REQUEST_METHOD']."<br>";
// echo $_SERVER['SERVER_PROTOCOL']."<br>";

// echo $_SERVER['REQUEST_TIME'];
// echo "<br>";
// echo $_SERVER['DOCUMENT_ROOT'];
// echo "<br>";
// echo $_SERVER['SERVER_ADMIN'];
echo "hello";
function mySetCookie(){
    setcookie('first','htun htun',time() +  3600,'/','',0  );
}
function myGetCookie(){
    if(isset($_COOKIE['first'])){
        echo   "<br>";
        echo $_COOKIE['first'];
    }else{
        echo "There is no cookie set with that key";
    }
}
 
// mySetCookie(); 
// myGetCookie();




function myDeleteCookie(){
    setcookie('first','',time()-3600,'/','',0);
}
myDeleteCookie();

?>