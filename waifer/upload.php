<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit'])){
    $tmpFile=$_FILES['file']['tmp_name'];
    $fileName=$_FILES['file']['name'];
    $filetype = pathinfo($fileName,PATHINFO_EXTENSION);
    echo $tmpFile ."<br>" .$fileName . "<br>" . $filetype ."<br>";

    if($filetype !='png' && $filetype !='jpg' && $filetype !='jpeg') {
        echo "<script>alert('Image must be PNG,JPG or JPEG.');</script>";
      }else
        {
            echo "successfully is jpg,png,";
        }


   $move= move_uploaded_file($tmpFile,'upload/'.$fileName);
   if($move){
       echo "successfully uploaded";
   }else{
       echo "failed to move uploaded file";
   }
}



?>


<!DOCTYPE html>

<html>

<head>

    <title>Basic File Upload sUsing PHP</title>

</head>

<body>

    <p>Upload a file using the form below:</p>

    <form enctype="multipart/form-data" action="<?php $_PHP_SELF; ?>" method="post" >


        <input type="submit" value="Upload Image" name="submit" />

    </form>

</body>

</html>