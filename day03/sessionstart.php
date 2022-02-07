<?php


    session_start();
    echo "<h1> Hello World Session Started </h1>";

    # $_SESSION
    $_SESSION["name"]="Noha";
    $_SESSION["track"]="Open source";
    $_SESSION["creditcardnumber"]=123456;