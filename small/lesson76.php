<?php
    if(isset($_POST['submit'])){
        $color = $_POST['myRadio'];
        echo $color;
        
    }



?>

<form action="<?php $_PHP_SELF ?>" method="POST">
    <input type="radio" name="myRadio" value="Red">Red<br><br>
    <input type="radio" name="myRadio" value="Green">Green<br><br>
    <input type="radio" name="myRadio" value="Blue">Blue <br><br>
    <input type="radio" name="myRadio" value="Rainbow">Rainbow <br><br>
    <button type="submit" name="submit">Submit</button>
</form>
