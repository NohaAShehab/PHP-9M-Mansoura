<?php


    echo "<h1> Welocome to opensource website</h1>";

    # accepting data sent through the web
    # you can find the it in one of the 2 places
    ## 1- $_REQUEST, $_POST, $_GET ---> super global arrays ---> can find data.

    # associative array
    var_dump($_REQUEST);  # built-in function ---> output information

    echo  $_REQUEST["username"];

    var_dump($_POST);

    var_dump($_GET);

    echo  $_GET["password"];


