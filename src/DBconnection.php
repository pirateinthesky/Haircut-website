<?php

$host = 'mysql';
$user = 'CAN';
$password = 'root';
$db = 'barber';
$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    echo "connection error --> " . mysqli_connect_error();
}

?>