<?php

$servername = "localhost";
$dbname = "garage";
$username = "root";
$password = "";

try{
    $database = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "Connectie mislukt: " . $e->getMessage();
}
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 10-4-2018
 * Time: 14:08
 */