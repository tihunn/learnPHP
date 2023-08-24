<?php
//connection mysql
require_once 'setting.php';

$connection = new mysqli($host, $user, $pass, $database);
if ($connection->connect_error) die('Error connection');

//data request
$query = 'SELECT * FROM users';
$result = $connection->query($query);

if (!$result) die('Error SELECT');

$rows = $result->num_rows;
for ($i =0; $i < $rows; ++$i) {
    $result->data_seek($i);
    echo 'Name: ' . $result->fetch_assoc()["name"] . "<br>";
}

//echo '<pre>';
//print_r($result->fetch_assoc());
//echo '</pre>';

$result->close();
$connection->close();