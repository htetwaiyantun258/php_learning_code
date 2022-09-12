<?php
    if(isset($_POST["submit"])){
      echo   $_FILES['file']['tmp_name'] . "<br>";
      echo   $_FILES['file']['name'] . "<br>";
      echo   $_FILES['file']['size'] . "<br>";
      echo   $_FILES['file']['type'] . "<br>";
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
<input type="file" name="file">
<button type="submit" name="submit">Upload</button>

</form>
</body>
</html>