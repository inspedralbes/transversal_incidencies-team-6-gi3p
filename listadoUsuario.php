<?php
$host = "localhost";
$usuario = "a20aitbaresc_projecte2";
$contrasenia = "Barreiro2004";
$base_de_datos = "a20aitbaresc_projecte2";


$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$resultado = $mysqli->query("SELECT INCIDENCIA.idIncidencia, INCIDENCIA.descr, INCIDENCIA.nom_Dept, INCIDENCIA.prioritat, INCIDENCIA.data_incidencia, TIPUS.nomTipus, TECNIC.nom  FROM INCIDENCIA INNER JOIN TECNIC ON INCIDENCIA.IdTecnic=TECNIC.idTecnic INNER JOIN TIPUS ON INCIDENCIA.IdTipus=TIPUS.idTipus ORDER BY INCIDENCIA.idIncidencia");
$INCIDENCIA = $resultado->fetch_all(MYSQLI_ASSOC);

?>   
<head>
    <title>Incidencies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="estilsLlistatUsuari.css">

</head>
<body>


    <header>

    


        <a href="indexUsuari.php" ><img src="img/logo.png" alt=""></a>
        
        
        
        <h1>Incidències</h1>
    </header>

    <div class="graella">


    <div class="gridHeader">
    <h3>ID</h3>
    <h3>Descripció</h3>
    <h3>Departament</h3>
    <h3>Prioritat</h3>
    <h3>Tècnic</h3>
    <h3>Tipus</h3>
    <h3>Data</h3>



    </div>

   

    <div class="contenidorIncidencies">

    <?php
                foreach ($INCIDENCIA as $INCIDENCIA) { ?>

    <div class="incidencia">
    <p><?php echo $INCIDENCIA["idIncidencia"] ?></p>
    <p class="descripcio"> <?php echo $INCIDENCIA["descr"] ?></p>
    <p> <?php echo $INCIDENCIA["nom_Dept"] ?></p>
    <p> <?php echo $INCIDENCIA["prioritat"] ?></p>
    <p>  <?php echo $INCIDENCIA["nom"] ?></p>
    <p> <?php echo $INCIDENCIA["nomTipus"] ?></p>
    <p>  <?php echo $INCIDENCIA["data_incidencia"] ?></p>

</div>


    
   
   
    <?php } ?>

    
    
                </div>

                </div>

        <footer>Institut Pedralbes 2023 <br>
    Projecte realitzat per: <br><br> Aitor · Alex · Eric · Miquel
    </footer>
</body>
