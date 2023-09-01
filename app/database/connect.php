<?php
$driver = 'mysql';
$host = 'localhost';
$db_name = 'test';
$db_user = 'root';
$db_pass = 'mysql';
$charset = 'utf8';
$option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
  $pdo = new PDO(
      "$driver:host=$host;dbname=$db_name;charset=$charset",
      $db_user, $db_pass, $option
  );
} catch (PDOException $i){
    die("Database connection error");
};
?>