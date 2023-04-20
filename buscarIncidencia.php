<?php
$mysqli = include_once "conexion.php";

$resultado = $mysqli->query("SELECT INCIDENCIA.idIncidencia, INCIDENCIA.descr, INCIDENCIA.nom_Dept, INCIDENCIA.prioritat, INCIDENCIA.data_incidencia, TIPUS.nomTipus, TECNIC.nom  FROM INCIDENCIA LEFT JOIN TECNIC ON INCIDENCIA.IdTecnic=TECNIC.idTecnic LEFT JOIN TIPUS ON INCIDENCIA.IdTipus=TIPUS.idTipus ORDER BY INCIDENCIA.idIncidencia");
$INCIDENCIA = $resultado->fetch_all(MYSQLI_ASSOC);

?>   
<head>
    <title>ID: </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="estilsbuscarIncidencia.css">

</head>
<body>


    <header>

    


        <a href="indexUsuari.php" ><img src="img/logo.png" alt=""></a>
        
        
        
        <h1>ID</h1>
    </header>

    <h2>llistat actuacions</h2>
    <div class="graella">


    <div class="gridHeader">
    <h3>Descripció</h3>
    <h3>Data</h3>
    <h3>Temps</h3>
    </div>

   

    <div class="contenidorIncidencies">

    <?php
                foreach ($INCIDENCIA as $INCIDENCIA) { ?>

    <p class="descripcio"> <?php echo $INCIDENCIA["descr"] ?></p>
    <p>  <?php echo $INCIDENCIA["data_incidencia"] ?></p>

</div>
   
   
    <?php } ?>

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

    
    
                </div>

                </div>

        <footer>Institut Pedralbes 2023 <br>
    Projecte realitzat per: <br><br> Aitor · Alex · Eric · Miquel
    </footer>
</body>
</html>