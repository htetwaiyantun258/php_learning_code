<?php

if(isset($_GET['submit'])){
    
    
    $chose=$_GET['myradio'];
    echo "Your choos is==>" . $chose;
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
<form action="<?php $_PHP_SELF ?>" method="Get">

<input type="radio" value="Single" name="myradio">Single <br><br>
<input type="radio" value="Couple" name="myradio">Couple <br><br>
<input type="radio" value="Married" name="myradio">Married <br><br>
<input type="radio" value="FA" name="myradio">FA <br><br>
<input type="radio" value="heartbreak" name="myradio">heartbreak <br><br>
<button type="submit" name="submit">Register</button>

</form>
</body>
</html>