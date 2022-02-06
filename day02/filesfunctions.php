<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $fileobj=fopen("names.txt", "r");
//    $line = fgets($fileobj);
//    var_dump($line);

//    $line = fgets($fileobj);  # read line from file
//    var_dump($line);

    while (!feof($fileobj)){
        $line = fgets($fileobj,5);
        var_dump($line);
    }