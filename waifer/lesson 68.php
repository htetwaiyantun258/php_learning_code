<?php





$varA = 30;
$varB = &$varA;

echo "Variable A =>" . $varA . "<hr>";
echo "Variable B =>" . $varB . "<hr>";



echo "Variable A =>" . $varA . "<hr>";
echo "Variable B =>" . $varB . "<hr>";


$varC = 67;

function changeValue(&$varC){
    $varC++;
    echo $varC . "<hr>";
   
}

changeValue($varC);
echo $varC . "<hr>";


