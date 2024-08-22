# Proyecto MVC

Este proyecto implementa una estructura de Modelo-Vista-Controlador (MVC) utilizando PHP y otras tecnologías web. Es ideal para gestionar aplicaciones web modulares y escalables.

## Estructura del Proyecto

La estructura del proyecto está organizada de la siguiente manera:

```
└── 📁mvc
    └── 📁assets
        └── 📁css
            └── 📁b5.1
                └── bootstrap.min.css
            └── jquery.dataTables.min.css
            └── main.css
        └── 📁fonts
        └── 📁images
            └── 📁archivos
            └── 📁pedidos
            ├── upload
        └── 📁js
            └── 📁b5.1
                └── bootstrap.bundle.min.js
            └── datatables.js
        ├── vid
    └── 📁controladores
        └── formularios.controlador.php
        └── home.controlador.php
    └── 📁html
        └── footer.php
        └── header.php
        └── nav-admin.php
    └── 📁modelos
        └── conexion.php
        └── formularios.modelo.php
    └── 📁PHPMailer
        └── envio2.php
        └── Exception.php
        └── OAuth.php
        └── PHPMailer.php
        └── POP3.php
        └── SMTP.php
    └── 📁vistas
        └── 📁paginas
            └── error404.php
            └── inicio.php
            └── login.php
            └── salir.php
        └── home.php
    └── index.php
```


## Descripción de Directorios y Archivos

- **.git/**: Directorio que contiene todos los archivos relacionados con el sistema de control de versiones Git.
- **assets/**: Archivos estáticos como CSS, JavaScript, imágenes, videos, etc.
  - **css/**: Archivos de estilos CSS, incluyendo Bootstrap y estilos personalizados.
  - **fonts/**: Fuentes utilizadas en el proyecto.
  - **images/**: Imágenes del proyecto.
  - **js/**: Archivos JavaScript, incluyendo Bootstrap y scripts personalizados.
  - **vid/**: Videos utilizados en el proyecto.
- **controladores/**: Controladores que manejan la lógica del negocio y la interacción con los modelos.
  - `formularios.controlador.php`: Lógica para manejar formularios.
  - `home.controlador.php`: Controlador para la página principal.
- **html/**: Componentes HTML comunes que se reutilizan en varias partes del proyecto.
  - `footer.php`: Pie de página.
  - `header.php`: Encabezado de la página.
  - `nav-admin.php`: Barra de navegación para el administrador.
- **modelos/**: Modelos que interactúan con la base de datos.
  - `conexion.php`: Configuración y conexión a la base de datos.
  - `formularios.modelo.php`: Lógica del modelo para manejar formularios.
- **PHPMailer/**: Biblioteca utilizada para el envío de correos electrónicos.
  - `envio2.php`: Ejemplo de uso de PHPMailer para enviar correos.
- **vistas/**: Vistas que generan la interfaz de usuario.
  - **paginas/**: Páginas individuales como `inicio.php`, `login.php`, etc.
- **index.php**: Archivo de entrada principal del proyecto.

## Tecnologías Utilizadas

- **PHP**: Lenguaje de programación principal para la lógica del servidor.
- **Bootstrap 5**: Framework CSS para el diseño responsivo y moderno.
- **JavaScript (jQuery, DataTables)**: Para la manipulación dinámica de la UI.
- **PHPMailer**: Librería para el envío de correos electrónicos.

## Instalación

1. Clonar el repositorio.
   ```bash
   git clone https://github.com/tuusuario/tu-repositorio.git
   
2. Configurar la conexión a la base de datos.
  Abre el archivo modelos/conexion.php y actualiza la configuración de la base de datos con tus credenciales locales:

  <?php
    class Conexion {
      public static function conectar() {
          $link = new PDO("mysql:host=tu_host;dbname=tu_base_de_datos","tu_usuario","tu_contraseña");
          $link->exec("set names utf8");
          return $link;
      }
    }
  ?>

3. Instalar dependencias.
  Asegúrate de que todas las dependencias necesarias están instaladas. Esto incluye:
  Bootstrap 5: Puedes usar el CDN o descargarlo e incluirlo en la carpeta assets/css/b5.1/.
  PHPMailer: Ya está incluido en el proyecto dentro de la carpeta PHPMailer/.

4. Configurar el servidor web.
  Configura un servidor local (por ejemplo, XAMPP o MAMP) y coloca los archivos del proyecto en la carpeta correspondiente (htdocs para XAMPP o sites para MAMP o www para Laragon).

5. Configurar el archivo envio2.php.
  En el archivo PHPMailer/envio2.php, asegúrate de que la configuración de SMTP esté correcta:
  
  $mail->IsSMTP();
  $mail->Host = "ssl://tu-servidor-de-salida:465"; // Servidor de Salida.
  $mail->SMTPAuth = true;
  $mail->Username = "tu_correo@example.com"; // Correo Electrónico
  $mail->Password = "tu_contraseña"; // Contraseña

6. Iniciar el proyecto.
  Una vez configurado todo, abre tu navegador y navega a:

  http://localhost/nombre-del-proyecto/index.php


### Uso

```markdown
## Uso

Después de haber completado la instalación, sigue estos pasos para utilizar la aplicación:

1. **Acceder a la aplicación.**

   Dirígete a la URL donde has instalado el proyecto (por ejemplo, `http://localhost/nombre-del-proyecto/index.php`).

2. **Interacción con la aplicación.**

   - **Inicio de sesión**: Utiliza las credenciales para iniciar sesión, si se requiere autenticación.
   - **Navegación**: Explora las diferentes secciones del sitio utilizando la barra de navegación.
   - **Formularios**: Puedes enviar datos a través de los formularios disponibles. Estos serán procesados por los controladores correspondientes (`formularios.controlador.php`).

3. **Gestión de correos.**

   Si has configurado correctamente PHPMailer, la aplicación puede enviar correos electrónicos a través del formulario de contacto u otros puntos configurados.

4. **Depuración y pruebas.**

   - Verifica que todas las funcionalidades estén operando como se espera.
   - Si encuentras errores, revisa los logs de PHP y asegúrate de que todos los archivos estén configurados correctamente.
   - Asegúrate de que la base de datos esté respondiendo correctamente y que las conexiones no estén fallando.

5. **Extensión del proyecto.**

   - Puedes añadir más controladores, modelos y vistas según sea necesario.
   - Sigue el patrón MVC para mantener una estructura limpia y modular.
