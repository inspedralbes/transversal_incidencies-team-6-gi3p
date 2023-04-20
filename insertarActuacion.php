<?php $mysqli = include "conexion.php";
$descripcio = $_POST["descripcio"];
$temps = $_POST["temps"];
$incidencia = $_POST["incidencia"];
$sentencia = $mysqli->prepare("INSERT INTO ACTUACIO
(descripcio, temps, incidencia)
VALUES
(?, ?, ?)");
$sentencia->bind_param("sii", $descripcio, $temps, $incidencia);
$sentencia->execute();

header("Location: formulario_actuacion.php?id=$incidencia");;
?>

