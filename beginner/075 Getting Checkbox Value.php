<?php
    if(isset($_GET["submit"])){
        $colors = $_GET["color"];
        foreach( $colors as $color){
            echo $color . "<br>";


        }
        

        }
    
?>

<form action="<?php $_PHP_SELF ?>" method="get">
<input type="checkbox" name="color[]" value="red">Red <br><br>
<input type="checkbox" name="color[]" value="green">Green <br><br>
<input type="checkbox" name="color[]" value="blue">Blue <br><br>
<input type="checkbox" name="color[]" value="navy blue">Navy Blue <br><br>
<input type="checkbox" name="color[]" value="rainbow">Rainbow <br><br>
<input type="submit" name="submit" id="">



</form>