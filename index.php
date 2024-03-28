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
        <input type="radio" name="tema" value="sepia" id="tema-sepia">
        <label for="tema-sepia">Tema sepia</label><br>
        <input type="radio" name="tema" value="alto_contraste" id="tema-alto-contraste">
        <label for="tema-alto-contraste">Tema alto contraste</label><br>
        <br><br>
        <h3>Preferencias</h3>
        <label for="estilo_musical">Estilo musical:</label>
        <br>
        <input type="checkbox" name="estilo_musical[]" value="rock" id="rock">
        <label for="rock">Rock</label>
        <br>
        <input type="checkbox" name="estilo_musical[]" value="pop" id="pop">
        <label for="pop">Pop</label>
        <br>
        <input type="checkbox" name="estilo_musical[]" value="electronica" id="electronica">
        <label for="electronica">Electrónica</label>
        <br>
        <input type="checkbox" name="estilo_musical[]" value="clasica" id="clasica">
        <label for="clasica">Clásica</label>
        <br>
        <input type="checkbox" name="estilo_musical[]" value="jazz" id="jazz">
        <label for="jazz">Jazz</label>
        <br>
        <input type="text" name="estilo_musical_otros" placeholder="Otros">
        <br>
        <label for="estilo_audiovisual">Estilo audiovisual:</label>
        <br>
        <input type="checkbox" name="estilo_audiovisual[]" value="documental" id="documental">
        <label for="documental">Documental</label>
        <br>
        <input type="checkbox" name="estilo_audiovisual[]" value="ficcion" id="ficcion">
        <label for="ficcion">Ficción</label>
        <br>
        <input type="checkbox" name="estilo_audiovisual[]" value="experimental" id="experimental">
        <label for="experimental">Experimental</label>
        <br>
        <input type="checkbox" name="estilo_audiovisual[]" value="animacion" id="animacion">
        <label for="animacion">Animación</label>
        <br>
        <input type="text" name="estilo_audiovisual_otros" placeholder="Otros">
        <br>
        <label for="otras_areas_interes">Otras áreas de interés:</label>
        <br>
        <input type="checkbox" name="otras_areas_interes[]" value="fotografia" id="fotografia">
        <label for="fotografia">Fotografía</label>
        <br>
        <input type="checkbox" name="otras_areas_interes[]" value="arte_digital" id="arte_digital">
        <label for="arte_digital">Arte digital</label>
        <br>
        <input type="checkbox" name="otras_areas_interes[]" value="diseño_grafico" id="diseño_grafico">
        <label for="diseño_grafico">Diseño gráfico</label>
        <br>
        <input type="checkbox" name="otras_areas_interes[]" value="teatro" id="teatro">
        <label for="teatro">Teatro</label>
        <br>
        <input type="checkbox" name="otras_areas_interes[]" value="danza" id="danza">
        <label for="danza">Danza</label>
        <br>
        <input type="checkbox" name="otras_areas_interes[]" value="literatura" id="literatura">
        <label for="literatura">Literatura</label>
        <br>
        <input type="text" name="otras_areas_interes_otros" placeholder="Otros">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
