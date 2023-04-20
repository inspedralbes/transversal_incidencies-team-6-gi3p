<?php
$mysqli = include_once "conexion.php";
$id = $_GET["id"];

$sentencia = $mysqli->prepare("SELECT idIncidencia, descr FROM INCIDENCIA WHERE idIncidencia = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$incidencia = $resultado->fetch_assoc();
if (!$incidencia) {
    exit("No hay resultados para ese ID");
}


?>
<head>
    <link rel="stylesheet" href="estilsEditar.css">
    <title>Editar</title>
</head>

<a href="indexAdministrador.php"><img src="img/logo.png" alt=""></a>
<h1>Insertar Actuació</h1>


<div class="row">


<form action="insertarActuacion.php" method="post">

<input type="hidden" name="incidencia" value="<?php echo $actuacio["idIncidencia"] ?>">

    <label for="descripcio">Descripcio:</label>
    <input type="text" id="descripcio" name="descripcio"maxlength="100" placeholder="Introdueix actuació" required>

<label for="temps">Temps:</label>
<select name="temps" id="temps" required>
<option value="">--- Seleciona el temps ---</option>
<option value="10" placeholder="Temps" class="form-control" type="text" name="temps" id="temps" required>10 Minuts</option>
<option value="15" placeholder="Temps" class="form-control" type="text" name="temps" id="temps" required>15 Minuts</option>
<option value="30" placeholder="Temps" class="form-control" type="text" name="temps" id="temps" required>30 Minuts</option>
<option value="45" placeholder="Temps" class="form-control" type="text" name="temps" id="temps" required>45 Minuts</option>
<option value="60" placeholder="Temps" class="form-control" type="text" name="temps" id="temps" required>60 Minuts</option>
</select>
<br>
<br>
