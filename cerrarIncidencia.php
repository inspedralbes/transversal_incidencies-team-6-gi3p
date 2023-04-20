<?php

$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("UPDATE INCIDENCIA SET data_fi=NOW() WHERE idIncidencia = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: finalizar.php?id=$id");

?>
