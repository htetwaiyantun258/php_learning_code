<?php

$greet = create_function('$para1,$para2','echo "hello world " . $para1[1] . " and " . $para2[1];');
$greet(["one","Two"],["three","four"]);