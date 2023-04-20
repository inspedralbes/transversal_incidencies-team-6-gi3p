<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilsInser.css">
    <title>Consulta Incidència</title>
</head>
<body>
<header>
        <a href="indexAdministrador.php" ><img src="img/logo.png" alt=""></a>
        <h1>ID Incidència</h1>

</header>
   

<div>
    <form action="formulario_actuacion.php" method="get">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id"maxlength="100" placeholder="ID de l'Incidencia" required autocomplete="off">
    
    <input type="submit" value="Buscar">
    
 
    
  </form>

  
  <?php
  if(isset($_GET['Buscar'])){
      $busqueda = $_GET['id'];
      $consulta = $con->query("SELECT * FROM INCIDENCIA WHERE id LIKE'%$id");
      while($row = $consulta->fetch_array()){
          echo $row['id'].'<br>';
      }
    }
  ?>
</div>

<footer>Institut Pedralbes 2023 <br>
    Projecte realitzat per: <br><br> Aitor · Alex · Eric · Miquel
    </footer>
    
</body>
</html>
