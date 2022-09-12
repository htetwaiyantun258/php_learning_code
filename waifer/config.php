<?php


define("DB_HOST","localhost");
define("DB_NAME","fwd");
define("DB_USER","root");
define("DB_PASS","code5959");


function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno() > 0){
        die("connection fail");
    }else{
        return $db;
    }
}
function executeQuery($qry){
    $db = dbConnect();
   $result= mysqli_query($db,$qry);
   echo mysqli_num_rows($result). "<br>";
   echo "<hr>";
    if(mysqli_num_rows($result) > 0){
        foreach($result as $item){
            //    errDubbger($item);
            
            echo "Id is " . $item["id"] . "<br>";
            echo "Title is " . $item["title"] . "<br>";
            echo "Description is " . $item["description"] . "<br>";
            echo "<hr>";
            
            
        
           }
    }
   
}


function errDubbger($data){
    echo "<pre>";
   print_r($data);
   echo "</pre>";
}
// errDubbger(dbConnect());

function retriveSingleData($id){
    $qry = "SELECT * FROM post WHERE id=$id";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    if(mysqli_num_rows($result) > 0){
        // errDubbger($result);
        foreach($result as $item){
            echo "Id is =>" . $item["id"] . "<br>";
            echo "Title is =>" . $item["title"] . "<br>";
            echo "Description =>" . $item["description"] . "<br>";
        }
    }
}
function insertData($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    print_r($result);
    echo $result > 0 ? "Success" : "Fail";

}
function pass($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);
    return $pass;
}

function unic_Data($name,$email,$pass,$current){
    $db = dbConnect();
    $qry = "SELECT * FROM user WHERE name='$name'";
    $ret = mysqli_query($db,$qry);
    if(mysqli_num_rows($ret) > 0){
        echo "already used";
    }else{
        $db = dbConnect();
        $qry = "INSERT INTO user(name,email,password,create_at) VALUES ('$name','$email','$pass','$current')";
        $result = mysqli_query($db,$qry);
        echo $result > 0 ? "Success Insert Data" : "Fail Insert Data";
    }

}

function multiInsertData($qry){
    $db =dbConnect();
    $result = mysqli_multi_query($db,$qry);
    echo $result ? "Success Insert Data" : "Fail Insert Data";


}
function deleteData($id){
    $qry = "DELETE FROM user WHERE id =$id";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    echo $result ? "Delete Data" : "Fail Delete Data";
}
$pass = pass(123);
// echo $pass;
// $qry = "SELECT * FROM post";
/**$qry = "INSERT INTO user VALUES (0,'nug','nug@gmail.com','$pass','2022-2-11');";
$qry .= "INSERT INTO user VALUES (0,'may','may@gmail.com','$pass','2022-6-11');";
$qry .= "INSERT INTO user VALUES (0,'kyaw','kyaw@gmail.com','$pass','2022-5-11');";
$qry .= "INSERT INTO user VALUES (0,'susu','susu@gmail.com','$pass','2022-3-11');";
$qry .= "INSERT INTO user VALUES (0,'waihla','waihal@gmail.com','$pass','2022-9-11');"; */


// insertData($qry);
// executeQuery($qry);
// retriveSingleData(3);
// unic_Data("aung aung","aungaung@gmail.com",$pass,"2021-6-19");
// multiInsertData($qry);
deleteData(2);
