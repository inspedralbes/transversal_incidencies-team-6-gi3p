<?php
$host = "localhost";
$usuario = "a20aitbaresc_projecte2";
$contrasenia = "Barreiro2004";
$base_de_datos = "a20aitbaresc_projecte2";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;