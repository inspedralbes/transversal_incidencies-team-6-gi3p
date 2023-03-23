<?php
$mysqli = include_once "conexion.php";

$resultado = $mysqli->query("SELECT INCIDENCIA.idIncidencia, INCIDENCIA.descr FROM INCIDENCIA");
$actuacio = $resultado->fetch_assoc();
if (!$actuacio) {
    exit("No hay resultados para ese ID");
}


?>

<head>
    <link rel="stylesheet" href="">
    <title>Actuacion</title>
</head>


<h1>Insertar Actuació</h1>



<div class="row">
    <div class="col-12">
    <h1><?php echo $actuacio["descr"] ?></h1>
        <form action="insertarActuacio.php" method="POST">

<input type="hidden" name="idIncidencia" value="<?php echo $actuacio["idIncidencia"] ?>">

    <label for="desc">Descripcio:</label>
    <input type="text" id="desc" name="descr"maxlength="100" placeholder="Problema que hi ha" required>
        

</select>
<br>

<label for="Temps">Temps:</label>
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

            <div class="form-group"> 
             
                <a href =insertarActuacio.php><button>Guardar</button></a> <br>
            </div>
            <a href=index.html>Volver</a>
            
<br>
</div>


