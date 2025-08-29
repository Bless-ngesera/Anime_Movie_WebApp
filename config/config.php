<?php 

try {
 
    //host
    define("HOST", "localhost");

    //dbname
    define("DBNAME", "anime");

    //user
    define("USER", "root");

    //pass
    define("PASS", "mysql061004!");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // if($conn == true) {
    //     echo "db connection is a success";
    // } else{
    //     echo "failed to connect to the db";
    // }
} catch (PDOException $e) {

    echo $e->getMessage();
}





?>