# ¡ANDÁ! — El fútbol también es turismo

## Descripción del proyecto

¡ANDÁ! es un sitio web dedicado al turismo futbolístico. Su objetivo es ayudar a los usuarios a descubrir ciudades, clubes, estadios y experiencias relacionadas con el fútbol.

El sitio permite explorar diferentes destinos, buscar ciudades o clubes, consultar propuestas gastronómicas y compartir experiencias personales.

## Tecnologías utilizadas

- **HTML:** estructura y contenido del sitio.
- **CSS:** diseño visual y adaptación de los elementos.
- **JavaScript:** buscador e interacciones de la página.
- **PHP:** procesamiento de formularios y consulta de reseñas.
- **MySQL:** almacenamiento de las experiencias enviadas por los usuarios.
- **XAMPP:** servidor local utilizado para ejecutar el proyecto.

## Funcionamiento del sitio

### Navegación

Desde el menú superior, el usuario puede acceder a las secciones Inicio, Ciudades, Experiencias, Gastronomía y Sobre el proyecto.

### Buscador

En la página principal hay un buscador que permite encontrar ciudades y clubes incluidos en el sitio.

### Experiencias

Los visitantes pueden completar un formulario con su nombre, ciudad, experiencia y calificación.

Al enviar el formulario, PHP recibe los datos y los guarda en la base de datos MySQL. Las reseñas almacenadas se muestran en la sección Experiencias.

## Base de datos

La base de datos se llama `anda` y contiene la tabla `experiencias`, con los siguientes campos:

- `id_experiencia`: identificador único.
- `nombre`: nombre del usuario.
- `ciudad`: ciudad de la experiencia.
- `experiencia`: comentario del usuario.
- `calificacion`: puntuación otorgada.

El archivo `experiencias.sql` permite recrear la tabla y cargar datos de prueba.

## Instalación y ejecución local

1. Instalar XAMPP.
2. Copiar los archivos del proyecto a la carpeta `htdocs/andam2`.
3. Iniciar Apache y MySQL desde XAMPP.
4. Abrir phpMyAdmin y crear una base de datos llamada `anda`.
5. Importar el archivo `experiencias.sql`.
6. Abrir `http://localhost/andam2/` en el navegador.

## Administración de experiencias

Las reseñas se administran desde phpMyAdmin, accediendo a la base de datos `anda` y a la tabla `experiencias`.

Desde allí se pueden consultar los registros almacenados.

El proyecto no cuenta actualmente con un panel de administración ni con un sistema de inicio de sesión.

## Capturas de pantalla

En este apartado se incorporarán capturas de la página principal, la navegación, el formulario de experiencias y la estructura de la base de datos.
