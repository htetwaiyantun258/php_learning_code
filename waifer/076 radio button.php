<?php



if(isset($_POST['submit'])){
    
    
    $chose=$_POST['myRadio'];
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
    <form action="<?php $_PHP_SELF; ?>" method="post">
    
        <h3>Chose color radio button</h3>
    <input type="radio" name="myRadio" value="Red">Red <br><br>
    <input type="radio" name="myRadio" value="Green">Green <br><br>
    <input type="radio" name="myRadio" value="Blue">Blue <br><br>
    <input type="radio" name="myRadio" value="White">White <br><br>
    

        <button type="submit" name="submit">Register</button>
    </form>
</body>
</html>