<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
# array map
//
//$instructors = ["Ahmed","Ali", "Omar","Mona"];
//$courses = ["Java", "PHP","Python", "Node"];
//$res=[];
//for($i=0;$i<count($instructors);$i++){
//    $t = $instructors[$i]." teaches ".$courses[$i];
//    array_push($res, $t);
//}
//var_dump($res);
//
////function concatInstCourse($inst, $course){
////    return $inst." teaches ".$course;
////}
//
//$d=concatInstCourse("Ahmed","Go");
//var_dump($d);
//
////$data=array_map("concatInstCourse",$instructors,$courses);
////var_dump($data);
//
//# approach ===> js , java, python, scala ---> Anonymous function(clousre)
//# do tas
//
//$data=array_map(function ($inst, $course){
//    return $inst." teaches ".$course;},$instructors,$courses);


$instructors = ["Ahmed","Ali", "Omar","Mona"];
$courses = ["Java", "PHP","Python", "Node"];


//$newarr=array_combine($courses,$instructors);  #new associative array
//var_dump($newarr);


# falsy values ---> null, False, 0, "",'',[]

//$my_array = [1,90,2,null,3,'',55,[],5,6,7,8,""];
//var_dump($my_array);
//$non_empties = array_filter($my_array);
//var_dump($non_empties);
//var_dump(array_values($non_empties));



$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'=> 8);

var_dump(array_intersect_key($array2, $array1));

#filter certain key from

$data = ["name"=>"Noha", "track"=>"Test","intake"=>42,"course"=>"PHP"];

# extract from the data array, ---> name, course
//$extract = ["name", "course"];
//$extracted =  array_flip($extract);
//var_dump($extracted);
////$extracted = ["name"=>0, "course"=>1];
////
//var_dump(array_intersect_key($data, $extracted));
//
//$a= [3,3,4,6,7,5,5,7,7,7,];
//var_dump(array_count_values($a));

//
$info=["username"=>"Noha","email"=>"nshehab@iti.gov.eg","track"=>"Application",4=>42];
extract($info);  # break the key value pair into variable=value
//
var_dump($username, $email,$track);


$info = array('coffee', 'brown', 'caffeine');
// Listing all the variables

//list($drink, $color, $power) = $info;
//var_dump($drink,$color,$power);




