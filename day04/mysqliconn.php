<?php


//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

    const DB_HOST = "localhost";
    const DB_USER = "osmans42";
    const DB_PASSWORD = "Iti123456789_";
    const DB_DATABASE = "osmans42";

    try{
        $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,
            DB_DATABASE,3306);
//        var_dump($conn);  # hold all the information about the db connection

        if (mysqli_connect_errno()) {
            trigger_error(mysqli_connect_error());
            echo "test <br>";
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
//        var_dump($conn);

        $respro = mysqli_query($conn,"select * from students");
//        var_dump($respro);  # return information about the result

//        echo mysqli_num_rows($respro);

        echo "------------------- data ----------------- <br> ";
//        $data= mysqli_fetch_all($respro,MYSQLI_ASSOC);
//        $data= mysqli_fetch_all($respro);

//        $data= mysqli_fetch_all($respro);
////        $data= mysqli_fetch_assoc($respro);  # one record as an array
//        var_dump($data);

//        while ($row = mysqli_fetch_assoc($respro)) {
//            var_dump($row);
////            printf ("%s (%s)\n", $row["Student_id"], $row["Student_name"]);
//        }
        echo "<table border='2'> <tr> <th> ID</th> <th> Name</th> <th> Email</th></tr>";
        while ($row = mysqli_fetch_assoc($respro)) {
            echo "<tr> <td>".$row["id"]."</td>".
                "<td>".$row["name"]."</td>".
                "<td>".$row["email"]."</td></tr>";
//            var_dump($row);
//            printf ("%s (%s)\n", $row["Student_id"], $row["Student_name"]);
        }
        echo "</table>";

        mysqli_free_result($respro);

    } catch (Exception $e) {

        echo 'Connection failed: ' . $e->getMessage();
    }



