<?php
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
echo "id=$id";

$sentencia = $mysqli->prepare("SELECT idIncidencia FROM INCIDENCIA WHERE idIncidencia = ?");
$sentencia->bind_param("id", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$incidencia = $resultado->fetch_assoc();
if ($incidencia) {
    echo "id=$id";
    header("Location: formulario_actuacion_Usuaris.php");
}else {
    //Si no hay registros encontrados
    
    
    
    header("Location: errorUsuari.php");
    
}

?>
