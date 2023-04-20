<?php
  $mysqli = include_once "conexion.php";
  $id = $_GET["id"];

  $sentencia = $mysqli->prepare("SELECT idIncidencia, descr FROM INCIDENCIA WHERE idIncidencia = ?");
  $sentencia->bind_param("i", $id);
  $sentencia->execute();
  $resultado = $sentencia->get_result();
  $incidencia = $resultado->fetch_assoc();
  if (!$incidencia) {
    exit("No hay resultados para ese ID");
  }
?>

<head>
  <link rel="stylesheet" href="estilsEditar.css">
  <title>Editar</title>
</head>

<a href="indexAdministrador.php"><img src="img/logo.png" alt=""></a>
<h1>Actualizar Incidencia</h1>



<div class="row">
  <div class="col-12">
    <h1><?php echo $incidencia["descr"] ?></h1>

    <form action="actualizar.php" method="POST">
    <input type="hidden" name="idIncidencia" value="<?php echo $incidencia["idIncidencia"] ?>">

    <label for="tecnic">Tècnic:</label>
    <select name="tecnic" id="color" required>
      <option value="">--- Seleciona el Tècnic ---</option>
      <option value="1" placeholder="Tècnic" class="form-control" type="text" name="tecnic" id="tecnic" required>Ermengol</option>
      <option value="2" placeholder="Tècnic" class="form-control" type="text" name="tecnic" id="tecnic" required>Alvaro</option>
      <option value="3" placeholder="Tècnic" class="form-control" type="text" name="tecnic" id="tecnic" required>Miquel</option>
      <option value="4" placeholder="Tècnic" class="form-control" type="text" name="tecnic" id="tecnic" required>Alex</option>
    </select>
    <br>

    <label for="Prioritat">Prioritat:</label>
    <select name="prioritat" id="prioritat" required>
      <option value="">--- Seleciona la Prioritat ---</option>
      <option value="Alta" placeholder="Prioritat" class="form-control" type="text" name="prioritat" id="prioritat" required>Alta</option>
      <option value="Mitja" placeholder="Prioritat" class="form-control" type="text" name="prioritat" id="prioritat" required>Mitja</option>
      <option value="Baixa" placeholder="Prioritat" class="form-control" type="text" name="prioritat" id="prioritat" required>Baixa</option>
    </select>
    <br>


    <label for="tipus">Tipus de incidencia:</label>

    <select name="tipus" id="color" required>
      <option value="">--- Seleciona el Tipus ---</option>
      <option value="1" placeholder="Tipus" class="form-control" type="text"  required>Hardware</option>
      <option value="2" placeholder="Tipus" class="form-control" type="text"  required>Electric</option>
      <option value="3" placeholder="Tipus" class="form-control" type="text"  required>Software</option>
    </select>
    <br>

    <div class="form-group"> 
      <a href =actualizar.php><button>Guardar</button></a> <br>
    </div>
    <a href=listadoAdministrador.php>Volver</a>
    <br>
  </div>
</div>


