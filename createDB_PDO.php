<?php
$host = "localhost";
$user = "root";
$pass = "";


try{
    $conn = new PDO("mysql:host=$host;",$user, $pass);

    $sql = "CREATE DATABASE test123";

    $conn->exec($sql);

    echo "db created";
}catch(Exception $e){

    echo "Not connected";
    
}
    









?>