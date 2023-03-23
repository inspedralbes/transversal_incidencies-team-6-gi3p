<?php
$host = "localhost";
$usuario = "a20aitbaresc_projecte2";
$contrasenia = "Barreiro2004";
$base_de_datos = "a20aitbaresc_projecte2";


$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$resultado = $mysqli->query("SELECT INCIDENCIA.idIncidencia, INCIDENCIA.descr, INCIDENCIA.nom_Dept,TECNIC.nom  FROM INCIDENCIA INNER JOIN TECNIC ON INCIDENCIA.IdTecnic=TECNIC.idTecnic");
$TECNIC = $resultado->fetch_all(MYSQLI_ASSOC);

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llistat Tecnic</title>
</head>
<body>
<a href="indexAdministrador.php"><img src="img/logo.png" alt=""></a>
    <h2>Llistat Tecnic</h2>
    <div class="graella">


    <div class="gridHeader">
    <h3>Nom tecnic</h3>
    <h3>ID INCIDENCIA</h3>
    <h3>Departament</h3>
    <h3>Descripció</h3>
    
    



    </div>
    <div class="contenidorIncidencies">

<?php
            foreach ($TECNIC as $TECNIC) { ?>

<div class="incidencia">
<p><?php echo $TECNIC["nom"] ?></p>
<p> <?php echo $TECNIC["idIncidencia"] ?>
<p> <?php echo $TECNIC["nom_Dept"] ?></p>
<p> <?php echo $TECNIC["descr"] ?></p>
</div>
<?php } ?>
</div>
   

    

</body>
<footer>Institut Pedralbes 2023 <br>
    Projecte realitzat per: <br><br> Aitor · Alex · Eric · Miquel 
    </footer>