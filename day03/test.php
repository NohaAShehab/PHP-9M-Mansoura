<?php


    if($_POST["description"]==""){
        setcookie("error","Plz fill in this field",time()+3500,"/osmans42/day03","",0,0);
        header("Location:testform.php");

    }else{
        echo $_POST["description"];
    }
