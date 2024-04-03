<?php
session_start();

// Si el usuario no está logueado, lo redirigimos al login
if (!isset($_SESSION['usuario_id'])) {
  header('Location: login.php');
  exit();
}

// Obtenemos el ID del usuario
$usuario_id = $_SESSION['usuario_id'];

// Consultamos la información del usuario
$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "i", $usuario_id);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
$usuario = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil de usuario</title>
</head>
<body>
  <h1>Perfil de usuario</h1>
  <p>Nombre: <?php echo $usuario['nombre']; ?></p>
  <p>Correo electrónico: <?php echo $usuario['correo']; ?></p>
  <br>
  <a href="logout.php">Cerrar sesión</a>
</body>
</html>
