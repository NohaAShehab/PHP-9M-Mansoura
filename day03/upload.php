<?php

    ini_set('max_execution_time',3600);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    ini_set('upload_max_filesize','50M');
   ini_set('post_max_size','50M');
   ini_set('max_input_time',3000);

    error_reporting(E_ALL);
    var_dump($_REQUEST);

    var_dump($_FILES);

//    '
//    'name' => string 'Python - Lab1.pdf' (length=17)
//      'type' => string 'application/pdf' (length=15)
//      'tmp_name' => string '/tmp/phpYObzCb' (length=14)
//      'error' => int 0
//      'size' => int 366461
//    '

    $tmp_name=$_FILES["abbas"]["tmp_name"];
    $filename= $_FILES["abbas"]["name"];



try{
    $res=move_uploaded_file($tmp_name,"files/".$filename);
    if ($res){echo "uploaded";}
} catch ( Exception $e) {
    echo $e;
}


echo "sdggggggggggg";

