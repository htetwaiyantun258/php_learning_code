<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    // $file_tmp = $_FILES['file']['tmp_name'];
    // $file_name = $_FILES['file']['name'];
    // $file_size = $_FILES['file']['size'];
    // $file_type = $_FILES['file']['type'];

    // echo $_FILES['file']['tmp_name'] . "<br>";
    // echo $_FILES['file']['name'] . "<br>";
    // echo $_FILES['file']['size'] . "<br>";
    // echo $_FILES['file']['type'] . "<br>";
    //  echo $file_name;
    // print_r($file_tmp . "<br>");
    // print_r($file_name . "<br>");
    // print_r($file_size . "<br>");
    // print_r($file_type . "<br>");
}

move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);

?>
<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file" multiple>
    <input type="submit" value="Upload Image" name="submit" />


</form>