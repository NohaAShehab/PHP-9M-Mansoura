<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//$fileobj=fopen("data.txt", "r");
////$data = fgetcsv($fileobj,1000, ":");
////var_dump($data);
//
//
//while (!feof($fileobj)){
//    var_dump(fgetcsv($fileobj,1000,":")); ;
//}

###############

//$data = readfile("data.txt");
//var_dump($data);

//$data = file("data.txt");
//var_dump($data);

# open file for write
file_put_contents("myfile.txt","Gehaaaaaaaaaaaaaaaaaaaaad");

############3
$obj = fopen("data.txt","r");
$l=fgetcsv($obj);
var_dump($l);
fseek($obj,10);
$l=fgetcsv($obj);
var_dump($l);
//var_dump(ftell($obj));
//rewind($obj);
//$l=fgetcsv($obj);
//var_dump($l);


$found = filetype("os42.txt");
var_dump($found);

//unlink("data.txt");
$path ="/var/www/html/osmans42/day02/append.php";
var_dump(basename($path));

