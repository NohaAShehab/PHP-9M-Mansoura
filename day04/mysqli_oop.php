<?php
const DB_HOST = "localhost";
const DB_USER = "osmans42";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "osmans42";

try {
    $conn2 = new mysqli (DB_HOST, DB_USER,
        DB_PASSWORD, DB_DATABASE,3308);
// #escaped seq used to make data comptable
//    with mySQL but not securing it
//    var_dump($conn2);
//    $welcometext='welcome to oop';

    $res=$conn2->query("select * from students");
//    var_dump($res);
    # get all data
    $data = $res->fetch_all(MYSQLI_ASSOC);
    var_dump($data);
//    while($row=$res->fetch_assoc()){
//        var_dump($row);
//    }
//
//    $res->free_result();
//

    $sql = "INSERT INTO students (`name`,`email`) VALUES ('Nohaaaa','Noha@iti.com')";
    if($conn2->query($sql)){
    echo "New record created successfully using oop"."<br>";
    }else{
    echo "Error: " . $sql . "<br>" .$conn2->connect_error;
    }
//    $conn2->close();



} catch (Exception $e) {
    echo 'Connection failed: ' . $e->getMessage();
}