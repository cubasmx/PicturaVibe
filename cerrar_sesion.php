<?php
session_start();

// Eliminar las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario al formulario
header('Location: index.php');
?>
