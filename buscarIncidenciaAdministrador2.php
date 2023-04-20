<?php
$mysqli = include_once "conexion.php";
$id = $_GET["id"];


$sentencia = $mysqli->prepare("SELECT INCIDENCIA.idIncidencia, INCIDENCIA.descr, ACTUACIO.descripcio,ACTUACIO.data,ACTUACIO.temps FROM INCIDENCIA LEFT JOIN ACTUACIO  ON  INCIDENCIA.idIncidencia=ACTUACIO.incidencia WHERE idIncidencia = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$incidencia = $resultado->fetch_assoc();
if ($incidencia) {
}else {
    //Si no hay registros encontrados
    
    
    
    header("Location: errorAdmin.php");
    
}

?>
<h1> <?php echo "INCIDENCIA $id"?>
<h2><?php echo $incidencia["descr"] ?></h2>
    
<table>
    <tr>
        <td><h3>Data</h3></td>
        <td><h3>Descripció</h3></td>
        <td><h3>Temps</h3></td>
    </tr>
    <tr>
            <td> <?php echo $incidencia["data"] ?></td>
            <td><?php echo $incidencia["descripcio"] ?></td>
            <td><?php echo $incidencia["temps"] ?></td>        
    </tr>
</table>
