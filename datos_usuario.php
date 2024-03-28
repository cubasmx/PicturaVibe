<?php
session_start();

// Guardar datos del formulario en la sesión

$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['correo'] = $_POST['correo'];
$_SESSION['contrasena'] = $_POST['contrasena'];
$_SESSION['fecha_nacimiento'] = $_POST['fecha_nacimiento'];
$_SESSION['tema'] = $_POST['tema'];

//Seleccionar tema

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
    <?php

    // Definir arrays para almacenar las preferencias del usuario
    $estilo_musical = [];
    $estilo_audiovisual = [];
    $otras_areas_interes = [];

    // Procesar las preferencias del usuario
    if (isset($_POST['submit'])) {

          // Estilo musical
        if (isset($_POST['estilo_musical'])) {
          $_SESSION['estilo_musical'] = $_POST['estilo_musical'];
        }

        // Estilo audiovisual
        if (isset($_POST['estilo_audiovisual'])) {
          $_SESSION['estilo_audiovisual'] = $_POST['estilo_audiovisual'];
        }

        // Otras áreas de interés
        if (isset($_POST['otras_areas_interes'])) {
          $_SESSION['otras_areas_interes'] = $_POST['otras_areas_interes'];
        }

      // Guardar las preferencias del usuario en la base de datos
      // ...

      // Mostrar un mensaje de confirmación al usuario
      echo "Tus preferencias se han guardado correctamente.";
    }

    ?>
    <p>Tema: <?php echo $tema; ?></p>
    <p>Estilo musical:</p>
        <?php foreach ($_SESSION['estilo_musical'] as $musica) { ?>
            <p><?php echo $musica; ?></p>
        <?php } ?>

        <p>Estilo audiovisual:</p>
        <?php foreach ($_SESSION['estilo_audiovisual'] as $audiovisual) { ?>
            <p><?php echo $audiovisual; ?></p>
        <?php } ?>

        <p>Áreas de interés:</p>
        <?php foreach ($_SESSION['otras_areas_interes'] as $area) { ?>
            <p><?php echo $area; ?></p>
        <?php } ?>

    <form action="cerrar_sesion.php" method="post">
        <button type="submit">Cerrar sesión</button>
    </form>

</body>
</html>
