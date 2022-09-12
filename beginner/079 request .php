<?php

if(isset($_GET['submit'])) {
    echo "success message";
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

    <form action="<? $_PHP_SELF ?>" method="GET">

        <input type="text" name="username">
        <br><br>
       <button type="submit" name="submit">Upload</button>
    </form>

</body>
</html>
