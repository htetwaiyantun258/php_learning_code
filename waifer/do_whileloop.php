<?php



// $name = "";
// echo $name ? $name : "Unknown";

// $name ="Lin Lin";
// echo $name? $name : "Unknown";


// $name = "";
// echo $name ?: "Unknown";

// $name = "Alice";
// echo $name ?: "Unknown";

// echo isset($name) ? $name: "Unknown";

//Null Coalescing Operator
echo $name ?? "Unknown";  //Unknown

//Null Coalescing Assignment Operator
$name = "May";
// $result = "";
$result ??= $name;
echo $result;

$time = date("h");

if($time > 6 and $time < 18 ) echo "Day Time";
else echo "Night Time";

if(0 < 3 and 3 < 7){
    echo "Success";
}else{
    echo "Try Again!";
}

if($time  > 6 and $time < 18):
    echo " Day Time";
else:
    echo "Night Time";
endif;
?>