<?php
include 'config.php';
// Incluimos los archivos necesarios
require_once('conexion.php');
require_once('funciones.php');

// Obtenemos la información de la base de datos
$conexion = conectar_bd();
$resultados = obtener_resultados($conexion);

// Mostramos la información en la página web
echo '<ul>';
foreach ($resultados as $resultado) {
  echo '<li>' . $resultado['nombre'] . '</li>';
}
echo '</ul>';

// Cerramos la conexión a la base de datos
cerrar_bd($conexion);
