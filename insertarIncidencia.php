<!DOCTYPE html>
<html lang="ca">
<head>
<?php
$mysqli = include_once "conexion.php";

$resultado = $mysqli->query("SELECT INCIDENCIA.idIncidencia  FROM INCIDENCIA WHERE INCIDENCIA.idIncidencia=1");
$INCIDENCIA = $resultado->fetch_all(MYSQLI_ASSOC);

?>   



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilsInser.css">
    <title>Insertar Incidència</title>
</head>
<body>
<header>
        <a href="indexUsuari.php" ><img src="img/logo.png" alt=""></a>
        <h1>Insertar Incidència</h1>

</header>
   


               
<div>
    <form action="idInsertada.php" method="post">
    <label for="nom_Dept">Departament:</label>
<select name="nom_Dept" id="nom_Dept" required>
	<option value="">--- Seleciona el Departament ---</option>
	<option value="Informàtica">Informàtica</option>
	<option value="Matemàtiques">Matemàtiques</option>
	<option value="Llengua">Llengua</option>
</select>

    <label for="lname">Descripcio:</label>
    <input type="text" id="descr" name="descr"maxlength="100" placeholder="Problema que hi ha" required autocomplete="none">

    <p> <input type="submit" value="Crear incidencia">
   
  </form>
</div>

<footer>Institut Pedralbes 2023 <br>
    Projecte realitzat per: <br><br> Aitor · Alex· Eric · Miquel 
    </footer>
    
</body>
</html>
