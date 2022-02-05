<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//$x = 100;
//var_dump($x);
//echo gettype($x);
//
////$x = 700+700.0;
//# covert type to float
//
//$x = (float)$x;
//
//var_dump($x);

//
//# variable of variable
//$InformationTechnologyInsitute = "abc";
//$iti = "InformationTechnologyInsitute";
//$x = "iti";
//echo $x;
//echo "<br>";
//echo $$$x;
//
//echo $x.$$x."      ".$$$x, " ",$iti;


//$x = 2000;
//$y = 200;
//$z = $x <=> $y;
//var_dump($z);


# reference operator

//$a = 10;
//$b = &$a;
//
//var_dump($a, $b);
//
//$a = 100;
//
//var_dump($a, $b);




//class SampleClass{};
//$myObject= new SampleClass();
//if ($myObject instanceof SampleClass)
//    echo "myObject is an instance of sampleClass"; // 1

//$b= @(25/0);
//var_dump($b);


//$x= "1000555m";  # try to cast this string to int
//
//$y = is_numeric($x);
//
//var_dump($y);

//$x = 10;
//var_dump(isset($x));
//var_dump(empty($x));

//$x = null;
//var_dump(isset($x));  # false
//var_dump(empty($x));  # true

//
//var_dump(isset($x));
//var_dump(empty($x));


//$m ="jkhjkh";
//unset($m);
//var_dump($m);


function abc(){
    echo "jii";
}

abc();
//
//var_dump(is_callable(abc));

for($i=0;$i<10; $i++){
    echo "We need the break! ".$i. "<br>";
    if($i==4) exit;
}


echo "after the loop ";



if (isset($_REQUEST["username"])){

}







