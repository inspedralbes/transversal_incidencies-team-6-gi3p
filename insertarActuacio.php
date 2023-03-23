<?php
$mysqli = include_once "conexion.php";
$descr = $_POST["descr"];
$temps = $_POST["temps"];

echo "Web en processo"


$sentencia = $mysqli->prepare("INSERT INTO ACTUACIO
(descr,temps)
VALUES
(?, ?)");

$sentencia->bind_param("si", $descr, $temps);
$sentencia->execute();
//header("Location: index.html");
