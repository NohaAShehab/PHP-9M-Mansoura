<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    # open file

    $fileobj=fopen("names.txt","r+");
    var_dump($fileobj);  # resource objext represent the file stream
    if($fileobj){
        # get file size
        $fsize = filesize("names.txt");
        var_dump($fsize);  # in bytes
        # read all the file content
//        $filedata=fread($fileobj, $fsize);
        $filedata=fread($fileobj, $fsize);
        var_dump($filedata);

        fwrite($fileobj,"new dataaaaaaaaaaaaa");
        fclose($fileobj);
    }



