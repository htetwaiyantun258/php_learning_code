<?php
define('MYSQL_USER','root');
define('MYSQL_PASSWORD','code5959');
define('MYSQL_HOST','localhost');
define('MYSQL_DATABASE','fwd');



// $db = new PDO('mysql:dbhost=localhost;dbname=fwd', 'root', 'code5959', [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
//     ]);
$pdoOptions = array(
    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
);

$db = new PDO(
    'mysql:host=' .MYSQL_HOST.';dbname=' .MYSQL_DATABASE,
    MYSQL_USER,MYSQL_PASSWORD,
    $pdoOptions
);

?>