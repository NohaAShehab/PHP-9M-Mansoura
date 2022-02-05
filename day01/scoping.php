<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$x = 'iti'; # this variable is defined in the global scope, can be accessed from anywhere in the script
# except inside the function
echo $x;


# local scope ---> variable defined inside the function
//
//function helloworld(){
//    echo "<br>---------------- Function block started ----------------<br>";
//    global $x;
//    print($x); # cannot be accessed
//    $x= "Information Technology Institute";
//    echo "<br>", $x;
//    $name = 'Noha';  # local scope cannot be accessed from out side
//    echo "<h3> Good morning ", $name, "</h3>";
//    echo "<br>---------------- Function block ended ----------------<br>";
//
//}
//helloworld();
////echo $name;
//
//echo $x;
//
//function sum(){
//    echo "<br>---------------- Function block started ----------------<br>";
//    $x = 100;
//    echo $x;
//    global $x;
//    print($x);
//    $x = "Yara";
//
//    echo "<br>---------------- Function block ended ----------------<br>";
//
//}
//sum();
//print($x);

################# parameter scope
//function sum($num1, $num2){  # $num1, $num2 --> varaibles in the paramter scope ### local scope
//    echo "<br>---------------- Function block started ----------------<br>";
//    echo $num1, " ",$num2;
//    echo "<br>---------------- Function block ended ----------------<br>";
//    return $num1+$num2;
//}
//$res=sum(10,300);
//var_dump($res);

##################### global, local , paramerter
# static scope

//function countcalls(){
//    static $count = 0;
//    $count = $count +1;
//    echo "<br> count = ", $count;
//}
//
//countcalls();
//countcalls();
//countcalls();
////echo $count;  # cannot be accessed outside the function



//#######################constant
//
//echo "<br> Constants  <br>";
//const iti  ="Information Technology Institute";
//# constants names are referenced without $
//# can be accessed anywhere within the script
//define("i", "myconstant");
//
//echo  iti, " ", i;
//
//function myfunction(){
//    var_dump(iti);
//    var_dump(i);
//}
//
//myfunction();
//
# super global variables


$_REQUEST["myname"]= "Noha Shehab";
var_dump($_REQUEST);
function test(){
    $_REQUEST["myname"]= "Noha";
    $_REQUEST["work"] = "ITI";
}

test();
var_dump($_REQUEST);

//$_REQUEST[""]













