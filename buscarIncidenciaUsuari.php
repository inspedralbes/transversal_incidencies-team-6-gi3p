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
        <a href="indexUsuari.php" ><img src="img/logo.png" alt=""></a>
        <h1>ID Incidència</h1>

</header>
   

<div>
    <form action="buscarIncidenciaUsuari2.php" method="get">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id"maxlength="100" placeholder="ID de l'Incidencia" required>
    
    <input type="submit" value="Buscar">
    
 
    
  </form>

  <br>
  
</div>

<footer>Institut Pedralbes 2023 <br>
    Projecte realitzat per: <br><br> Aitor · Alex · Miquel · Eric
    </footer>
    
</body>
</html>
