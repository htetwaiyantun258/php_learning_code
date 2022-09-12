<?php



// $data = simplexml_load_file("data.xml");
// // print_r($data);
// foreach($data as $key=>$val){
//     echo $val . "<br>";
// }

$xml =<<<START

<code>
    <name>Waiferkolar</name>
    <age>33</age>
    <subject>C++ , Python, Assembly</subject>
    <address>No. 48(c) San Yeik Nyein</address>
    <married>Yes</married>
</code>
START;
$databox = simplexml_load_string($xml);
print_r($databox);
