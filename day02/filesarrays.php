<?php


//$Staff=file("info.csv");
//
//var_dump($Staff);
//echo "<table border='2'>";
//echo "<tr>
//<th>Name</th>
//<th>Track</th>
//<th>Intake</th>
//<th>Edit</th>
//<th>Delete</th>
//</tr>";
//foreach ($Staff as $record){
//    $r=explode(":",$record); # return with an array
//    echo "<tr>";
//    foreach ($r as $item){
//        echo "<td>".$item."</td>";
//    }
//    echo "<td><a >Edit </a> </td>";
//    echo "<td><a>Delete </a> </td>";
//    echo "</tr>";
//}
//foreach ($Staff as $record){
//    $data=explode(",",$record);
//    foreach ($data as $val){
//        echo "<td>". $val."</td>";
//    }
//    echo "</tr>";
//}
//echo "</table>";

//function print_fruits($value){
//    echo $value."#"."<br>";
//}
$fruits = ['banana', 'apple',"Kiwi","Orange"];
////foreach ($fruits as $f){
////    print_fruits($f);
////}
array_walk($fruits,"print_fruits");
////array_walk($fruits,"print_fruits");
///
///

$instructors = ["Eng. Shery", "Noha", "Andrew"];
$courses = ['Admin', 'PHP', 'Node'];

for($i=0;$i<count($instructors);$i++){
    echo $instructors[$i]." teaches ".$courses[$i]."<br>";
}
'noha teaches php, ahmed teach apache ';
//$result= array_map(function($item1,$item2){},$instructors,$courses);
//function test($str1,$str2){
//    return $str1." teaches ".$str2;
//}
//$m=array_map("test",$instructors,$courses);
//var_dump($m);


function test($str1,$str2){
    return $str1." teaches ".$str2;
}
$b = test("abc","ggg");
var_dump($b);
//$m=array_map("test",$instructors,$courses);
//var_dump($m);

//
//$m=array_map(function ($str1,$str2){
//    return $str1." teaches ".$str2;},$instructors,$courses);
//var_dump($m);

$name="Noha";
$email="fff2@gmail.com";
$rowdata=$name.":".$email.PHP_EOL;