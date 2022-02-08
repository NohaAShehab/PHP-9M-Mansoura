<?php
const DB_HOST = "localhost";
const DB_USER = "osmans42";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "osmans42";
try {
//    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,
//        DB_DATABASE, 3306);

    $conn = new mysqli (DB_HOST, DB_USER,
        DB_PASSWORD, DB_DATABASE,3308);
    $sql = "insert into students (`name`,`email`) values(?, ?)";

    $stmt=$conn->prepare($sql);
    $stmt->bind_param("ss",$name,$email);

}catch (Exception $e){
    echo $e->getMessage();
}