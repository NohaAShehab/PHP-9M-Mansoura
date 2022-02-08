<?php


const DB_HOST = "localhost";
const DB_USER = "osmans42";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "osmans42";

try{
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,
        DB_DATABASE,3306);

//    # query as string
//    $query= "insert into students(`name`,`email`) values ('test','test')";
//    $qres=mysqli_query($conn, $query);
//    var_dump($qres);

//    $query= "update students set email='test@gmail.com' where id =3";
//    $qres=mysqli_query($conn, $query);
//    var_dump($qres);
//    var_dump($conn);


    $query= "delete from students where id =3";
    $qres=mysqli_query($conn, $query);
    var_dump($qres);
    var_dump($conn);

    //    CRUD---> create, retrieve, update, delete

    mysqli_close($conn);

}
catch(Exception $e){
    echo $e->getMessage();
}

