<?php


//    $arr=  range(0,10);
//    var_dump($arr);
//$arr=  range(0,10,2);
//var_dump($arr);

//$arr=  range("a","A",);
//var_dump($arr);


//$alphRange=range("A","Z", 4);
//print_r($alphRange);
//var_dump($alphRange);
//foreach ($alphRange as $char){
//    echo $char." , ";
//}

$info=["Name"=>"Noha","Email"=>"nshehab@iti.gov.eg","Track"=>"Application"];
$info["Intake"]=35;
var_dump($info);
$newarr=array_reverse($info);
var_dump($newarr);
//var_dump($info);
//var_dump(count($info));
//echo $info["Name"];
//$info["Name"] ="noha shehab";
//print_r($info);


//foreach ($info as $k=>$value){
//    echo $k." ".$value."<br>";
//}
//$myarr=range("a","z",1);
//foreach ($myarr as $i){
//    echo $i."<br>";
//}
//
//foreach ($info as $item){
//    echo $item."<br>";
//}

//$name= "noha";
//$track = "opensource";
//$intake =42;
//$myarr=compact("name","track","intake");
//var_dump($myarr);

//$a=range("a","z");
//var_dump($a);
//$b=range(0,10);
//var_dump($b);
//$c= $a+$b;

//var_dump($c);


$students=array(
    1=>array("Ali","IOT"),
    2=>array("Mostafa","Cloud"),
    3=>["Noha","Application"]
);

//var_dump($students);
//foreach ($students as $mystd){
//    foreach ($mystd as $std){
//        echo $std." ";
//    }
//    echo "<br>";
//}

//$names = array( 'noha', "Fatma", "Dina", "Andrew","Shimaa","suliman" );
//sort($names); // returns with the are sorted ascending.
//var_dump($names);

//$numbers = ["10","11","22","100"];
//sort($numbers,SORT_STRING);
//
//rsort($numbers,SORT_STRING);
//var_dump($numbers);


//$info=["Name"=>"Noha","Email"=>"nshehab@iti.gov.eg","Track"=>"Application"];
//var_dump($info);
////asort($info);
//ksort($info);
//
//var_dump($info);



//function cmp($a, $b)
//{
//    if ($a == $b) {
//        return 0;
//    }
//    return ($a < $b) ? 1 : -1;
//}
//$a = array(3, 2, 5, 6, 1);
//var_dump($a);
//usort($a, "cmp");
//var_dump($a);
//
//foreach ($a as $key => $value) {
//    echo "$key: $value"."<br>";
//}