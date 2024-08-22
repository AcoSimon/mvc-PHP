# Proyecto MVC

Este proyecto implementa una estructura de Modelo-Vista-Controlador (MVC) utilizando PHP y otras tecnologías web. Es ideal para gestionar aplicaciones web modulares y escalables.

## Estructura del Proyecto

La estructura del proyecto está organizada de la siguiente manera:

```
└── 📁mvc
    └── 📁.git
        └── 📁hooks
            └── applypatch-msg.sample
            └── commit-msg.sample
            └── fsmonitor-watchman.sample
            └── post-update.sample
            └── pre-applypatch.sample
            └── pre-commit.sample
            └── pre-merge-commit.sample
            └── pre-push.sample
            └── pre-rebase.sample
            └── pre-receive.sample
            └── prepare-commit-msg.sample
            └── push-to-checkout.sample
            └── sendemail-validate.sample
            └── update.sample
        └── 📁info
            └── exclude
        └── 📁logs
            └── 📁refs
                └── 📁heads
                    └── main
                └── 📁remotes
                    └── 📁origin
                        └── main
            └── HEAD
        └── 📁objects
            └── 📁01
                └── cf53690f61a740483be1fd008a8c127ebeb6f4
            └── 📁02
                └── ae65b5fe5d12c881eb054006f68b52a2818615
            └── 📁07
                └── fde4c8158420c4b293f8388c71e64ff6b49b10
            └── 📁08
                └── da7aa8eef2d2372f5bb72d2a8bddc9f0113e5e
            └── 📁0a
                └── fdc234b2be3f92069655f6875f613fd9812349
            └── 📁0b
                └── 46b6d64c0cbcb98b8751f90144a15eb331b271
            └── 📁13
                └── 34c2121eb69815ee7e48270967df9e321557b8
                └── 95eb39f1af27a3197115e58429809cbc57d52b
            └── 📁1b
                └── 5a4b5ceda180bfc75a38269df73960dda24a33
            └── 📁23
                └── 5e6372d2a04aac49d65f414af040dbc97d7326
            └── 📁2a
                └── 14c2f5cd0e5b6b515b77a0426ec5249a2b1984
            └── 📁30
                └── 1ec8ce4c158f45bd3c5f0e654a9fd7be4d0013
            └── 📁35
                └── 5aed00c5e626376418f6c41d25d8f9b2973483
            └── 📁37
                └── 5cb8e1621deb97d58d8b391a51fe44ee4e1656
            └── 📁38
                └── ec375cf151fa18063a25b2d970f477374962b7
            └── 📁41
                └── 5319e9132dd014e1892c3c1f0bf156552b3536
            └── 📁42
                └── 93fb47bab36341fc8d0c3113cf2a5c1a5cce0d
            └── 📁45
                └── 8d2647eb212fb4dedf2d776f577ea2f798ea64
            └── 📁65
                └── 92298de8372e7e7118a7f571a4c39238f005a6
            └── 📁68
                └── 45c98776ec3a31356722d1d177df182e0d3484
            └── 📁6a
                └── 1a40163269044ad0139560120f25526ac7cedf
            └── 📁7d
                └── 77d3045d52febfccddad7755606b8938da288e
            └── 📁8a
                └── aaa9e574ca179a210881a87bc3288edfaad3e4
            └── 📁8c
                └── b291b0a7bb16ebec55a04771ddaccc030f5e59
            └── 📁a5
                └── 0a8991f7a1d13551dfe3fa98085aa604715833
            └── 📁a8
                └── ea4ffa3f799b1e9d096eb44fdaee6febda7115
            └── 📁b3
                └── 9c83a9d717e131399f324b9fdf6112da16d473
            └── 📁b4
                └── fa956742f60940e6aa516898ba988397f3d82f
            └── 📁b6
                └── 5b161a5332cca8cdea77ed3320bcc99380f304
            └── 📁ba
                └── 3b7612616270703b7226119181ab6536993465
            └── 📁bf
                └── a347c4f05f86246d94bf52a9af13b0b4f70c54
            └── 📁c1
                └── 76ca7133faf32923307aa1f1c1c34fea0b07be
            └── 📁cc
                └── 4a0e3aaa80be2a84c7273f9a1ec39088caea75
            └── 📁d0
                └── d61fc74d8687a088a39944fecb2c781b4f846a
            └── 📁e2
                └── 6b22e8237c243038f7f2643487474137e60628
            └── 📁e7
                └── ea113fdec2d639a892af3babaa8bbc75a63a90
            └── 📁fc
                └── 8b84e93ab3622196b71b8cb28dc286b451dd48
            └── 📁info
            ├── pack
        └── 📁refs
            └── 📁heads
                └── main
            └── 📁remotes
                └── 📁origin
                    └── main
            ├── tags
        └── COMMIT_EDITMSG
        └── config
        └── description
        └── FETCH_HEAD
        └── HEAD
        └── index
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
