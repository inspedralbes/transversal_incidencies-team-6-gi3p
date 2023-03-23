<!DOCTYPE html>
<html lang="ca">
<head>
<?php
$host = "localhost";
$usuario = "a20aitbaresc_projecte2";
$contrasenia = "Barreiro2004";
$base_de_datos = "a20aitbaresc_projecte2";


$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
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
   

<?php
                foreach ($INCIDENCIA as $INCIDENCIA) { ?>
               
<div>
    <form action="idInsertada.php" method="post">
    <label for="nom_Dept">Departament:</label>
<select name="nom_Dept" id="color" required>
	<option value="">--- Seleciona el Departament ---</option>
	<option value="Informàtica">Informàtica</option>
	<option value="Matemàtiques">Matemàtiques</option>
	<option value="Llengua">Llengua</option>
</select>

    <label for="lname">Descripcio:</label>
    <input type="text" id="lname" name="descr"maxlength="100" placeholder="Problema que hi ha" required autocomplete="none">

    <p> <button ><a href="idInsertada.php?id=<?php echo $INCIDENCIA["idIncidencia"] ?>">Guardar</a></button>
   
  </form>
</div>
   <?php } ?>

<footer>Institut Pedralbes 2023 <br>
    Projecte realitzat per: <br><br> Aitor · Alex · Miquel · Eric
    </footer>
    
</body>
</html>
