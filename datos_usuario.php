<?php
session_start();

// Guardar datos del formulario en la sesión

$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['correo'] = $_POST['correo'];
$_SESSION['contrasena'] = $_POST['contrasena'];
$_SESSION['fecha_nacimiento'] = $_POST['fecha_nacimiento'];
$_SESSION['tema'] = $_POST['tema'];

//Seleccionar tema

// if (isset($_POST['tema'])) {
//     $_SESSION['tema'] = $_POST['tema'];
//   }

if (isset($_SESSION['tema'])) {
    $tema = $_SESSION['tema'];
  } else {
    $tema = "claro"; // Tema por defecto
  }
  
  echo '<link rel="stylesheet" href="' . $tema . '.css">';

// Obtener la fecha y hora actual para la cookie
$fecha_hora_actual = date('Y-m-d H:i:s');

// Guardar la fecha y hora en una cookie
setcookie('ultima_sesion', $fecha_hora_actual, time() + 3600); // Expira en 1 hora

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Usuario</title>
</head>
<body>
    <h1>Datos del Usuario</h1>
    <p>Nombre: <?php echo $_SESSION['nombre']; ?></p>
    <p>Correo electrónico: <?php echo $_SESSION['correo']; ?></p>
    <p>Fecha de nacimiento: <?php echo $_SESSION['fecha_nacimiento']; ?></p>

    <?php
    // Mostrar el tiempo desde el último inicio de sesión
    $ultima_sesion = $_COOKIE['ultima_sesion'];
    $diferencia_tiempo = strtotime($fecha_hora_actual) - strtotime($ultima_sesion);
    $tiempo_transcurrido = gmdate("H:i:s", $diferencia_tiempo);
    ?>

    <p>Tiempo desde el último inicio de sesión: <?php echo $tiempo_transcurrido; ?></p>

    <form action="cerrar_sesion.php" method="post">
        <button type="submit">Cerrar sesión</button>
    </form>

</body>
</html>
