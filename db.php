<?php

$host = "localhost";;
$user = "root";
$pass = "root";
$dbName = "car_reservation";
$dsn = "mysql:host=$host;dbname=$dbName";
$connection = new PDO($dsn,$user,$pass);

if($connection){
    echo "sucess";
}else{
    echo "unsucessfull";
}

echo"<br>";

$stmt = $connection->prepare("SELECT * FROM car_driver_info WHERE car_id=?");
$carId = 3;
$stmt->bindParam(1,$carId);
 if($stmt-> execute()){
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    print_r($array);
 }
