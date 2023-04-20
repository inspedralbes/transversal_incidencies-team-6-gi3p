<?php
$id=$_GET["id"];
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT INCIDENCIA.idIncidencia, INCIDENCIA.descr,INCIDENCIA.data_fi FROM INCIDENCIA LEFT JOIN ACTUACIO  ON  INCIDENCIA.idIncidencia=ACTUACIO.incidencia WHERE idIncidencia = $id");
$actuaciof = $resultado->fetch_assoc();

$resultatActuacio = $mysqli->query("SELECT descripcio, ACTUACIO.data, temps FROM ACTUACIO WHERE ACTUACIO.incidencia = $id");
$actuacions = $resultatActuacio->fetch_all(MYSQLI_ASSOC);
?>


<head>
    <link rel="stylesheet" href="estilsActuacion.css">
    <title>Actuacion</title>
</head>
<body>
<a href="indexUsuari.php"><img src="img/logo.png" alt=""></a>
<h1> <?php echo "INCIDENCIA $id"?>
<h2><?php echo $actuaciof["descr"] ?></h2>
    
<div class="graella">



    <div class="gridHeader">

        <h3>Data</h3>
        <h3>Descripció</h3>
        <h3>Temps</h3>
       
    </div>
    

<div class="contenidorIncidencies">


    <?php foreach ($actuacions as $actuacion) { ?> 
                            <span><?php echo $actuacion["data"] ?></span>
                            <span><?php echo $actuacion["descripcio"]?></span>                     
                            <span><?php echo $actuacion["temps"]?> minuts</span>                         
                            
                            </tr>
                        <?php }?>
                        
    </div>
    <br>
    <h3>Data Fi</h3>
                        <span><?php echo $actuaciof["data_fi"] ?></span>   
    </div>
<footer>Institut Pedralbes 2023 <br>
    Projecte realitzat per: <br><br> Aitor · Alex · Eric · Miquel
    </footer>
