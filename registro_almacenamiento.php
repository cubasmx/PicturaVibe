<?php

// Preparamos la consulta SQL
$sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)";

// Preparamos la sentencia SQL
$stmt = mysqli_prepare($conexion, $sql);

// Vinculamos los parámetros
mysqli_stmt_bind_param($stmt, "sss", $nombre, $correo, $contrasena);

// Ejecutamos la consulta
mysqli_stmt_execute($stmt);

// Verificamos si la consulta se ha ejecutado correctamente
if (mysqli_stmt_affected_rows($stmt) > 0) {
  echo 'Usuario registrado correctamente.';
} else {
  echo 'Error al registrar el usuario.';
}

// Cerramos la sentencia SQL
mysqli_stmt_close($stmt);
