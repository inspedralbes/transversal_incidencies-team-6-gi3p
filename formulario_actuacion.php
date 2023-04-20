<?php
    $id=$_GET["id"];
    $mysqli = include_once "conexion.php";
    $resultado = $mysqli->query("SELECT INCIDENCIA.idIncidencia, INCIDENCIA.descr,INCIDENCIA.data_fi FROM INCIDENCIA LEFT JOIN ACTUACIO  ON  INCIDENCIA.idIncidencia=ACTUACIO.incidencia WHERE idIncidencia = $id");
    $actuaciof = $resultado->fetch_assoc();

    $resultatActuacio = $mysqli->query("SELECT descripcio, ACTUACIO.data, temps FROM ACTUACIO WHERE ACTUACIO.incidencia = $id;");
    $actuacions = $resultatActuacio->fetch_all(MYSQLI_ASSOC);

    if (!$actuaciof) {
        //Si no hay registros encontrados
        header("Location: errorAdmin.php");
    }
    if(!empty($actuaciof["data_fi"])){
        header("Location: finalizar.php?id=$actuaciof[idIncidencia]");
    }else{
    }
?>


<head>
    <link rel="stylesheet" href="estilsActuacion.css">
    <title>Actuacion</title>
</head>
<body>
    <a href="indexAdministrador.php"><img src="img/logo.png" alt=""></a>
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
            <?php }?>
        </div>
    </div>


    <h1>Insertar Actuació</h1>


    <div class="row">
        <form name="actuacio"action="insertarActuacion.php" method="POST">
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
            <br><br>
            <input type="hidden" name="incidencia" value="<?php echo $_GET["id"] ?>">
            <div class="form-group">
                <a href =insertarActuacion.php><button>Guardar Actuacion</button></a> <br>
            </div>
            <br><br>
            <button><a href="cerrarIncidencia.php?id=<?php echo $actuaciof["idIncidencia"] ?>">Cerrar Incidencia</a></button>
    </div>
<footer>Institut Pedralbes 2023 <br>
    Projecte realitzat per: <br><br> Aitor · Alex · Eric · Miquel
</footer>
