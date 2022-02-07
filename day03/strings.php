<?php
//    function cleanstr($str){
//        $cleanedstr = trim($str);
//        return $cleanedstr;
//    }
//
//
//    $text = "\t\tThese are a few words :) ...               eh\tT";
//    var_dump($text);
//    $trimmed = rtrim($text, "\tThe ");
//    var_dump($trimmed);
//    echo $text;

//$str="You came
//to me
//in that hour
//of need";
//
//var_dump( nl2br($str));

//"What\'s your name?"  # add scape char

//
//$var1 = "Hello";
//$var2 = "Hello";
//var_dump(strcasecmp($var1,$var2));
//if (strcmp($var1, $var2) !== 0) {
//    echo '$var1 is not equal to $var2 in
//a case sensitive string comparison';
//}
//
//
//echo(ord("Ammmm"))."<br>";
//
//
//$str = 'abcdef';
//echo str_shuffle($str)."<br>";


//$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
//$str= "We need the break now";
//# w nd th brk nw
//$onlyconsonants = str_replace(["e","E"], "&", $str);
//echo $onlyconsonants."<br>";

$input = array('A: XXX', 'B: ZZZ', 'C: YYY');
# 'A:@@@X'  'B:@@@Z'  'C:@@@Y'
$input=substr_replace($input, '@@@', 2, 3);
var_dump($input);



