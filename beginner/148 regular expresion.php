<?php

$var = "abcdefg";
$bol = preg_match("/^[g-z]/", $var);
// echo $bol ? "True" : "False";

$varNum = "lovppppppppp";
$bolNum = preg_match("/p{2,}/", $varNum);
// echo $bolNum ? "True" : "False";


/** [a-z]
 *  [a-Z]
 *  [A-z]
 *  [A-Z]
 * [0-9]
 *
 */

/**n+    Matches any string that contains at least one n
n*    Matches any string that contains zero or more occurrences of n
n?    Matches any string that contains zero or one occurrences of n
n{x}    Matches any string that contains a sequence of X n's
n{x,y}    Matches any string that contains a sequence of X to Y n's
n{x,}    Matches any string that contains a sequence of at least X n's */


$string = "Brighter 2300 Myanamar";

$result = preg_replace("/[[:alnum:]]/","+",$string);
echo $result;

/**
 * 
 *  [:alpha:] 
 *  [:digit:] 
 *  [:alnum:] 
 *  
 */