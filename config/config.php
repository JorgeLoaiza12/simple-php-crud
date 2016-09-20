<?php

$host = "localhost";
$user = "root";
$password = "123456";
$dbname = "bookshop";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Conexión apropiada a MySQL!" . PHP_EOL;

?>