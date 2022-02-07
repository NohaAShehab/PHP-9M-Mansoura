<?php


ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    # if file not exist ---> create it , if the file exists ---> earse data
    $fileobj = fopen("os42.txt", "a");
    var_dump($fileobj);


    # write to the file
    $res = fwrite($fileobj, "zxfcvcv\n");  # number of chars written to the file
    var_dump($res);


    fclose($fileobj);



