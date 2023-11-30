<?php
$host = "localhost";
$nombreBD = "inmobiliaria";
$usuario = "root";
$password = "";

$pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",
    $usuario, $password);

?>