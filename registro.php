<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de usuario</title>
</head>
<body>
  <h1>Registro de usuario</h1>
  <form action="registro_conexion.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required>
    <br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required>
    <br>
    <br>
    <button type="submit">Registrarse</button>
  </form>
</body>
</html>
