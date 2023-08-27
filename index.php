<?php
//connection mysql
$connection = new PDO("mysql:host=localhost;dbname=test", "tihun", "12345");

//direct request
//$query = "INSERT users (name, age, login, password) VALUE ('Igor', '22', 'igor', 'password')";
//$count = $connection->exec($query);
//
//echo $count;

//request preparation
$name = "Oly";
$age = 34;
$login = 'das2z';
$pass = "advbcx2f2";

$param = [
    'n' => $name,
    'age' => $age,
    'login' => $login,
    'pass' => $pass
];

$sql = "INSERT users (name, age, login, password) VALUE (:n, :age, :login, :pass)";
$query = $connection->prepare($sql);

$query->execute($param);