# PicturaVibe
PicturaVibe (Ficticia, pero en proceso de hacerse realidad)

# Historia de la empresa

"PicturaVibe" se fundó en 2024 con el objetivo de crear una plataforma global que permita a creativos de todo el mundo compartir y acceder a contenido visual de alta calidad de manera gratuita.

# Misión, Visión, Valores

## Misión:

Nuestra misión en PicturaVibe es empoderar a la comunidad creativa global proporcionando un espacio accesible y gratuito para compartir, inspirar y colaborar a través de contenido visual de alta calidad.

## Visión:

Queremos ser la plataforma líder a nivel mundial en la democratización del acceso al arte y la creatividad, brindando a todos, en cualquier lugar, la posibilidad de expresarse y encontrar inspiración de manera libre.

## Valores:

Colaboración: Creemos en la fuerza de la colaboración y en el poder de unir a personas diversas para crear algo único.
Accesibilidad: Buscamos la accesibilidad total, asegurando que la creatividad no tenga barreras y esté al alcance de todos.
Calidad: Nos comprometemos a mantener altos estándares de calidad en todo el contenido compartido en nuestra plataforma.
# Filosofía

En PicturaVibe, creemos que la creatividad es un derecho universal y que todos tienen la capacidad de expresarse. Nuestra filosofía se basa en la idea de que al ofrecer un espacio de intercambio gratuito y respetuoso, podemos fomentar la inspiración y la innovación a nivel global.

# Ramo

PicturaVibe opera en el ramo de plataformas de contenido visual, proporcionando un espacio centralizado para la creación, compartición e inspiración artística.

# Producto o servicio

## Nombre:

PicturaVibe

## Descripción:

PicturaVibe es una plataforma digital que ofrece a artistas y creadores un espacio para compartir, descubrir y colaborar en contenido visual. Desde imágenes e ilustraciones hasta videos y arte digital, PicturaVibe fomenta la creatividad y la conexión entre la comunidad global de artistas.

# Público objetivo

Las características del público objetivo de PicturaVibe son:

Artistas visuales
Ilustradores
Diseñadores gráficos
Fotógrafos
Entusiastas del arte digital
Personas que buscan inspiración creativa
# Secciones

## Explorar:

Galería de Inspiración: Una colección curada de obras destacadas y tendencias artísticas para proporcionar inspiración continua.
Explorar por Categorías: Secciones temáticas que permiten a los usuarios navegar y descubrir contenido específico, como pintura, fotografía, ilustración, arte digital, entre otros.
## Iniciar sesión:

### Primero hay que iniciar sesión. 
Vamos a hacer un pequeño ejercicio de PHP. Creé dos archivos PHP. El primero contenía un formulario que pedía los siguientes datos: nombre, correo electrónico, contraseña y fecha de nacimiento. El segundo mostraba los datos del usuario, cuánto tiempo había pasado desde el último inicio de sesión y un botón de cerrar sesión. Tuve que guardar los datos del usuario en una sesión. Asimismo, tuve que guardar la fecha y la hora al momento de iniciar sesión en una cookie.

### Implementar selección de tema en el formulario

1. Añadir opciones de tema al formulario:

En el formulario, agrega dos elementos de tipo radio con el nombre tema. Cada elemento debe tener un valor único que identifique el tema (por ejemplo, claro y oscuro). Puedes agregar etiquetas para que el usuario sepa qué opción representa cada tema.

Ejemplo:

HTML
<form action="index.php" method="post">
  <input type="radio" name="tema" value="claro" id="tema-claro">
  <label for="tema-claro">Tema claro</label><br>
  <input type="radio" name="tema" value="oscuro" id="tema-oscuro">
  <label for="tema-oscuro">Tema oscuro</label><br>
  <input type="submit" value="Iniciar sesión">
</form>
Use code with caution.

2. Almacenar la selección del tema en la sesión:

Al procesar el formulario, verifica el valor seleccionado en el campo tema y guarda esa información en la sesión usando $_SESSION['tema'].

Ejemplo:

PHP
session_start();

if (isset($_POST['tema'])) {
  $_SESSION['tema'] = $_POST['tema'];
}

// Redirigir al usuario a la página principal o a otra página según sea necesario
Use code with caution.

3. Cargar la hoja de estilo correcta:

En la página principal (o en cualquier página donde se quiera aplicar el tema), verifica el valor de $_SESSION['tema'] y carga la hoja de estilo correspondiente.

Ejemplo:

PHP
session_start();

if (isset($_SESSION['tema'])) {
  $tema = $_SESSION['tema'];
} else {
  $tema = "claro"; // Tema por defecto
}

echo '<link rel="stylesheet" href="' . $tema . '.css">';
Use code with caution.

4. Crear las hojas de estilo básicas:

Crea dos archivos CSS, claro.css y oscuro.css, que definan los estilos básicos para cada tema. Puedes empezar con estilos simples para el fondo, el color de texto, los encabezados y otros elementos básicos de la página.

Ejemplo de claro.css:

CSS
body {
  background-color: #ffffff;
  color: #333333;
}

h1, h2, h3 {
  color: #000000;
}
Use code with caution.

Ejemplo de oscuro.css:

CSS
body {
  background-color: #222222;
  color: #ffffff;
}

h1, h2, h3 {
  color: #dddddd;
}
Use code with caution.

Consideraciones adicionales:

Podemos ampliar la selección de temas en el futuro, agregando más opciones como "contraste alto" o "sepia".
Podemos usar frameworks CSS como Bootstrap o Materialize para facilitar la creación de temas con estilos más complejos.
Es importante que las hojas de estilo sean ligeras y eficientes para no afectar el rendimiento de la página.


## Perfil del Artista: 

Un espacio personalizado para que los usuarios carguen y compartan su propia obra, conecten con otros artistas y reciban feedback de la comunidad.
Estudio Creativo: Herramientas de edición y funciones que permiten a los artistas mejorar y presentar su trabajo de manera única.

A considerar: Se acuerdan de MySpace? había mucha personalización. Eso me agrada. Y a la vez estoy casado con la idea de lo limpio y simple (Vgr. Wikipedia) ¡Tengo un corazón divido!

## Unirme:

Registro de Nuevos Usuarios: Un proceso sencillo para que nuevos creativos se unan a la comunidad PicturaVibe y comiencen a compartir su arte.
## Imágenes:

Banco de Imágenes: Una amplia colección de fotografías y elementos visuales de alta calidad disponibles para su descarga y uso creativo.
# Comunidad y Colaboración:

Foro Creativo: Un espacio para que los miembros de la comunidad discutan temas relacionados con el arte, compartan consejos y se apoyen mutuamente.
Proyectos Colaborativos: Secciones dedicadas a proyectos conjuntos, donde los artistas pueden unirse para crear obras colaborativas únicas.
# Herramientas y Recursos:

Kit de Herramientas: Recursos como pinceles, texturas y plantillas que los artistas pueden utilizar en sus propias creaciones.
Tutoriales y Consejos: Secciones educativas que brindan orientación a los usuarios para mejorar sus habilidades artísticas.

Planificación de desarrollo de PicturaVibe

# Funcionalidades:

## Fase Alfa:

### Esenciales:

Registro de usuario.
Subida de contenido (imágenes, videos, etc.).
Exploración de contenido (categorías, artistas, temas).
Perfil del artista (información, imágenes, redes sociales).
Sistema de comentarios.
### Secundarias (fases posteriores):

Foro para la discusión e intercambio de ideas.
Mensajería interna.
Donaciones para artistas (PayPal).
Herramientas de edición básicas (imágenes/videos).
# Objetivos:

Objetivo 1: Alcanzar X usuarios registrados en el primer mes.
Objetivo 2: Obtener Y comentarios de usuarios sobre la plataforma.
Objetivo 3: Lograr un Z% de satisfacción entre los usuarios de la alfa.
# Planificación del desarrollo:

## Desglose de tareas:

Diseño de la interfaz de usuario:
Wireframes y prototipos.
Desarrollo del front-end:
Implementación de HTML, CSS y JavaScript.
Desarrollo del back-end:
Lógica de la aplicación, gestión de usuarios y base de datos.
Pruebas y correcciones:
Pruebas de usabilidad y corrección de errores.
## Priorización de tareas:

Creación de wireframes básicos.
Implementación del esqueleto en HTML.
Utilización de un framework como Vue.js.
Diseño de la interfaz:
Basado en otras páginas similares.
Interfaz simple, minimalista y limpia (similar a Wikipedia).
Herramienta: Whimsical.
# Herramientas:

Trello (organización de tareas).
Whimsical (creación de wireframes).
Vue.js (framework front-end).
# Recursos:

Plataformas de pago online como PayPal.
# Recomendaciones que se me han hecho:

Establecer un cronograma realista: Define fechas límite para cada tarea y asegúrate de que sean alcanzables. Comunicación constante con mis hermanos: Mantenerlos informados sobre el progreso del proyecto y asegurarme de que estén alineados con las decisiones que se toman. Utilizar herramientas de colaboración: Plataformas como Trello o Github pueden facilitar el trabajo en equipo. Ser flexible y adaptable: Es probable que surjan imprevistos durante el desarrollo, por lo que es importante ser flexible y adaptable a los cambios. Uno de las peticiones es poder utilizar frameworks para el frontend y el backend. Estaba pensando en Vue.Js y en Node.Js
# Consideraciones adicionales:

Escalabilidad: La plataforma debe poder escalar a medida que aumenta el número de usuarios.
Seguridad: Implementar medidas de seguridad para proteger la información de los usuarios.
Marketing: Desarrollar una estrategia de marketing para dar a conocer la plataforma.
# Próximos pasos:

Definir los objetivos específicos (X, Y, Z).
Desglosar las tareas en pasos más pequeños.
Estimación del tiempo necesario para cada tarea.
Crear un cronograma con fechas límite.
Comenzar con la creación de wireframes.
# Notas:

Este plan es un punto de partida y puede modificarse a medida que el proyecto avanza.
Es importante mantener una comunicación constante con todos los involucrados en el proyecto.
Se debe ser flexible y adaptable a los cambios que puedan surgir durante el desarrollo.