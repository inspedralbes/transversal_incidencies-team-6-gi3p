<?php
$mysqli = include_once "conexion.php";
$id = $_POST["idIncidencia"];
$nombre = $_POST["tecnic"];
$prioritat = $_POST["prioritat"];
$tipus = $_POST["tipus"];

/*echo $id;
echo $nombre;
echo $prioritat;
echo $tipus;*/

$sentencia = $mysqli->prepare("UPDATE INCIDENCIA SET
idTecnic = ?,
prioritat = ?,
idTipus = ?
WHERE idIncidencia = ?");
$sentencia->bind_param("isii", $nombre, $prioritat, $tipus, $id);
$sentencia->execute();
header("Location: listado.php");
