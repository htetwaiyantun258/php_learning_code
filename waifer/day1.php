<?php

//php lesson 21 to

///**echo lesson  */

echo "Hello","World"; // multi string
// echo ("hello","world"); echo () ==> is no multi string
//echo ("hello Jasmin") //echo()==>is ok


///***print lesson
print "Hello";// print is multi string not working
//print ("hello","lady")//print()==>para is multi string is not working
//print("hello")// is ok  
echo "<br>";


$bol=4>5 || 4==4;
echo $bol;// ans ==>1 
echo "<br>";


$num1="40";
$num2=40;
echo $num2+$num1;  //ans==>80
echo "<br>";
$num= $num1===$num2;
echo $num; // no answer  but this answer is 0 .php is not show 0
echo "<br>";
var_dump($num);
echo "<br>";
// echo $num2.$num1;

// echo PHP_INT_MAX;
$bol1=is_int(PHP_INT_MIN);
var_dump($bol1); 
echo "<br>";

// echo PHP_INT_MIN;

$num_1=20;
$num_2=30.3344433;
var_dump($num_1+$num_2);
echo "<br>";



//boolean lesson 

$bool_2=array();
echo $bool_2? "True":"False";


//""==>false
#"0" ==>false
#singned integer =>true
//null value ==>false
//array without element ==>false

//php lesson 027 null vs blank string

$a=""; //" "  for assing for address ရှိတယ်
$b=NULL;//NULL for assing for addressမရှိဘူး




//php lesson 028 return သဘောတရား




//php lesson 029 Here Doc

//Here Docသာမသုံးရင် echoနဲ့ ==>echo "hello programmer"ဆိုပြီးechoသုံးပြီးရေးနေရမှာ
//here doc ===>  <<<start  content   
//start; အဆုံးသတ်ကို ဘေးဘောင်နဲ့ခွာမပေးရဘူး
$content=<<<start
<h1>Aung Maung</h1>
<p>Hello hello wal aung</p>
<h1>Aung Maung</h1>
<p>Hello hello wal aung</p>
<h1>Aung Maung</h1>
<p>Hello hello wal aung</p>
<h1>Aung Maung</h1>
<p>Hello hello wal aung</p>
start;
echo $content;

// php lesson 030 Naming Convension Assign Reassign
//$_name="Mg Mg";
 $age;//declare
 $age=34;  //assign //initialize
 $age=23;//reassign

 //php lesson 031 Constant Variable

define("NAME","aung aung"); // constant variable 
define("DB_HOST","localhost");// constant variable 

echo NAME;//aung aung
echo "<br>";
echo DB_HOST;//localhost
echo "<br>";



//php lesson 032 operators arethmetic operators + - / % ++ --

$num4=3;//int
$num5=5;//int

$sum=$num5/$num4;
echo $sum;
echo "<br>";
var_dump($sum);//float and double data type



//php lesson 033 Increment and decrement

$num6=5;//assign
$num6 =$num6 + 1;//reassign
echo $num6;
echo "<br>";


echo $num6++;//increasement
echo "<br>";
echo $num6+=2;
echo "<br>";

echo $num6-=2;//decreasement
echo "<br>";


 
//php lesson 034 ifStatement
 
// if(true){
//    trueမှ အလုပ်လုပ်တယ်
//     false ဆိုအလုပ်မလုပ်ဘူး
// }

if(4<5){
    echo "True";
}

if(4>5){
    echo "false";
}
echo "<br>";



//php lesson 035 if else statement

if(4>5){
    echo 1;
}else{
    echo 2;
}
echo "<br>";

//php lesson 036 Comparison operators
// == != > < >= <= ===

$_num1=30;
$_num2=40;
$_bol=$_num1 === $_num2;

if($_bol){
    echo "It is true";
}else{
    echo "It is false";
}
echo "<br>";


//php lesson 037 logical operators

// &&=and  ||=or  !=not

$_name="Mg Mg";
$_pass="code3333";

if(!(4<5)){//!ture==>false==>get out
    echo "Welcome Back";
}else{
    echo "Get out";
}
echo "<br>";


//php lesson 038 assignment operators
//   = +=  -=  /= %= *=
$_age1=23;

echo $_age1+=1;
echo "<br>";
echo $_age1-=1;echo "<br>";
echo $_age1/=2;echo "<br>";
echo $_age1*=3;echo "<br>";
echo $_age1%=5 ;echo "<br>";

//php lesson 039 conditional operator/teneary operator
//  ? : 
// 4>5 ? "True": "False"; ==>False
 
echo 4>5? "True":"False";//ans False
echo "<br>";
echo 4>5? 1:0;//ans 0



?>