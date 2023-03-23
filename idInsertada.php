<?php
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
echo "id=$id";

$sentencia = $mysqli->prepare("SELECT idIncidencia FROM INCIDENCIA WHERE idIncidencia = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$incidencia = $resultado->fetch_assoc();
if (!$incidencia) {
    exit("No hay resultados para ese ID");
}


?>