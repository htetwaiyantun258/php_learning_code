<?php

    if(isset($_POST["submit"])){
        

        foreach($_FILES["files"]['tmp_name'] as $key => $val){
            echo $key;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="files[]" multiple>
    <input type="submit" name="submit" value="submit">


</form>
</body>
</html>