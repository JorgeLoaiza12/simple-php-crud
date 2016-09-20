<?php

$host = "localhost";
$user = "root";
$password = "123456";
$dbname = "bookshop";

$conn = mysqli_connect($host, $user, $password, $dbname);

/*

if (!$conn) {
    echo "Error: No connect to MYSQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Connected successfully..." . PHP_EOL;
*/

?>