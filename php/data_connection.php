<?php

function connectToDB(){

    $servername = "localhost";
    $username = "Anita";
    $password = "root";
    $dbname = "projectphp";

    try { $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //echo "success";
    } catch(PDOException $e) {
        echo "connection failed" .$e->getMessage();
    }
    return $pdo;
}
?>