<?php

$datos_validos = true;

// Validamos el nombre
if (empty($nombre)) {
  echo 'El nombre es obligatorio.';
  $datos_validos = false;
}

// Validamos el correo electrónico
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
  echo 'El correo electrónico no es válido.';
  $datos_validos = false;
}

// Validamos la contraseña
if (strlen($contrasena) < 8) {
  echo 'La contraseña debe tener al menos 8 caracteres.';
  $datos_validos = false;
}

if ($contrasena != $contrasena_confirmacion) {
    echo 'Las contraseñas no coinciden.';
    $datos_validos = false;
  }
  

