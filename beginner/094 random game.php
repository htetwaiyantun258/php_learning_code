<?php

$playerOne = rand(0,6);
$playerTwo = rand(0,6);

if($playerOne === $playerTwo){
    echo "Draw" . $playerOne ." " . $playerTwo;
}elseif($playerOne > $playerTwo){
    echo "playerOne  success game". $playerOne ." " . $playerTwo;

}else{
    echo "playerTwo Success Game". $playerOne ." " . $playerTwo;
}