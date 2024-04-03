<?php
include 'config.php';

// Creamos la conexión a la base de datos
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);

// Verificamos si la conexión se ha realizado correctamente
if (!$conexion) {
  echo 'Error al conectar a la base de datos: ' . mysqli_connect_error();
  exit();
}

// Retornamos la conexión
return $conexion;
