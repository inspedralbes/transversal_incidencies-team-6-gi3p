<?php
    $mysqli = include_once "conexion.php";

    $resultado = $mysqli->query("SELECT INCIDENCIA.idIncidencia, INCIDENCIA.descr, INCIDENCIA.nom_Dept, INCIDENCIA.prioritat, INCIDENCIA.data_incidencia, TIPUS.nomTipus, TECNIC.nom  FROM INCIDENCIA LEFT JOIN TECNIC ON INCIDENCIA.IdTecnic=TECNIC.idTecnic LEFT JOIN TIPUS ON INCIDENCIA.IdTipus=TIPUS.idTipus ORDER BY INCIDENCIA.prioritat,INCIDENCIA.idIncidencia");
    $INCIDENCIA = $resultado->fetch_all(MYSQLI_ASSOC);

?>   
<head>
    <title>Incidencies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilsLlistat.css">

</head>
<body>
    <header>
        <a href="indexAdministrador.php" ><img src="img/logo.png" alt=""></a>
        <h1>Incidències</h1>
    </header>

    <div class="graella">
        <div class="gridHeader">
            <h3 id="idH">ID</h3>
            <h3 id="descrH">Descripció</h3>
            <h3 id="deptH">Departament</h3>
            <h3 id="prioritatH">Prioritat</h3>
            <h3 id="tecnicH">Tècnic</h3>
            <h3 id="tipusH">Tipus</h3>
            <h3 id="dataH">Data</h3>
            <h3 id="gestionarH">Gestionar</h3>
        </div> 
        <div class="contenidorIncidencies">
            <?php foreach ($INCIDENCIA as $INCIDENCIA) { ?>
                <div id="<?php echo $INCIDENCIA["prioritat"]?>">
                    <span id="id"><?php echo $INCIDENCIA["idIncidencia"] ?></span>
                    <span id="descr"> <?php echo $INCIDENCIA["descr"] ?></span>
                    <span id="dept"> <?php echo $INCIDENCIA["nom_Dept"] ?></span>
                    <span id="prioritat"> <?php echo $INCIDENCIA["prioritat"] ?></span>
                    <span id="tecnic">  <?php echo $INCIDENCIA["nom"] ?></span>
                    <span id="tipus"> <?php echo $INCIDENCIA["nomTipus"] ?></span>
                    <span id="data">  <?php echo $INCIDENCIA["data_incidencia"] ?></span>
                    <div id="buttons">
                        <button><a href="editar.php?id=<?php echo $INCIDENCIA["idIncidencia"] ?>">Editar</a></button>
                        <button><a href="eliminar.php?id=<?php echo $INCIDENCIA["idIncidencia"] ?>">Eliminar</a></button>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <footer>
        Institut Pedralbes 2023 <br>
        Projecte realitzat per: <br><br> 
        Aitor · Alex · Eric · Miquel
    </footer>
</body>
