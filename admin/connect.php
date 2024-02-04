<?php 

$dsn = "mysql:host=localhost;dbname=shop";

$user = "root";

$password = "";

$options = array(

    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);

try {
    $pdo = new PDO($dsn, $user, $password , $options) ;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
    // echo "You Are Connected Welcome To Database";
} catch (PDOException $e){
    echo "Faild To Connect". $e->getMessage();
}