<?php
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $password = $_POST['password'];
    } 

?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <h3>Register To Be a Member!</h3>
    <input type="text" name="username" placeholder="User Name"><br><br>
    <input type="password" name="password" ><br><br>
    <button type="submit" name="submit">Submit</button>
</form>