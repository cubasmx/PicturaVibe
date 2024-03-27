<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="datos_usuario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" id="correo" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" required>
        <br>
        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
        <br>
        <input type="radio" name="tema" value="claro" id="tema-claro">
        <label for="tema-claro">Tema claro</label><br>
        <input type="radio" name="tema" value="oscuro" id="tema-oscuro">
        <label for="tema-oscuro">Tema oscuro</label><br>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
