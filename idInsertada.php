<!DOCTYPE html>
<html lang="ca">
<?php
$mysqli = include_once "conexion.php";
$nom_Dept = $_POST["nom_Dept"];
$descr = $_POST["descr"];

$sentencia = $mysqli->prepare("INSERT INTO INCIDENCIA
(nom_Dept, descr)
VALUES
(?, ?)");

$sentencia->bind_param("ss", $nom_Dept, $descr);
$sentencia->execute();
?>


<head>
        <title>Gestió incidències</title>
        <link rel="stylesheet" href="estilsInsertada.css">
</head>
<body>


<div class="px-4 py-5 my-5 text-center">
    <img class="confirm" src="img/changes.png">
    <h1 class="display-5 fw-bold">Incidència registrada</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4"><?php printf("La ID de la Incidència és %d", $mysqli->insert_id)?></p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="indexUsuari.php" class="btn btn-primary btn-lg px-4">Inici</a>
      </div>
    </div>
  </div>

<footer>Institut Pedralbes 2023 <br>
    Projecte realitzat per: <br><br> Aitor · Alex · Miquel · Eric
    </footer>
</body>
</html>
