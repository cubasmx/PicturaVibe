<?php
session_start();

// Definimos las variables de conexión
$host = 'localhost';
$usuario = 'root';
$contrasena = 'aguilux0';
$base_datos = 'mibasededatos';

// Creamos la conexión a la base de datos
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);

// Verificamos si la conexión se ha realizado correctamente
if (!$conexion) {
  echo 'Error al conectar a la base de datos: ' . mysqli_connect_error();
  exit();
}

// Obtenemos los datos del formulario
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Validamos los datos (ver archivo "login_validacion.php")
include 'login_validacion.php';

// Si los datos son válidos, iniciamos la sesión del usuario
if ($datos_validos) {
  // Consultamos la información del usuario
  $sql = "SELECT * FROM usuarios WHERE correo = ?";
  $stmt = mysqli_prepare($conexion, $sql);
  mysqli_stmt_bind_param($stmt, "s", $correo);
  mysqli_stmt_execute($stmt);
  $resultado = mysqli_stmt_get_result($stmt);
  $usuario = mysqli_fetch_assoc($resultado);

  // Iniciamos la sesión
  $_SESSION['usuario_id'] = $usuario['id'];
  $_SESSION['usuario_nombre'] = $usuario['nombre'];
  $_SESSION['usuario_correo'] = $usuario['correo'];

  // Redirigimos al usuario a su perfil
  header('Location: perfil.php');
}

// Cerramos la conexión a la base de datos
mysqli_close($conexion);
