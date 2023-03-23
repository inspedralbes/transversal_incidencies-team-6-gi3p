<?php
$mysqli = include_once "conexion.php";
$nom_Dept = $_POST["nom_Dept"];
$descr = $_POST["descr"];



$sentencia = $mysqli->prepare("INSERT INTO INCIDENCIA
(nom_Dept, descr)
VALUES
(?, ?)");

$sentencia->bind_param("ss", $nom_Dept, $descr);
$sentencia->execute();
header("Location: index.html");
