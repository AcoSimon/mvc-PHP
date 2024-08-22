<?php

// Recoge los datos del formulario enviados a través de POST
$Nombre = $_POST['nombre'] . $_POST['apellidos']; // Concatenación del nombre y apellidos
$Email = $_POST['correo']; // Dirección de correo electrónico del remitente
$Mensaje = $_POST['comentario']; // Comentario o mensaje del formulario
$pr1 = $_POST['pr1']; // Variable adicional pr1
$pr2 = $_POST['pr2']; // Variable adicional pr2
$archivo = $_FILES['archivo']; // Archivo adjunto enviado a través del formulario

// Requiere las clases necesarias de PHPMailer para enviar el correo
require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";

// Usa el espacio de nombres PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Crea una nueva instancia de PHPMailer
$mail = new PHPMailer();

// Configura los datos del remitente del correo
$mail->From = $Email; // Dirección de correo del remitente
$mail->FromName = $Nombre; // Nombre completo del remitente

// Añade la dirección de correo del destinatario
$mail->AddAddress("hola@somosbrandom.com"); // Dirección de correo del destinatario

// Configura el formato del correo
$mail->WordWrap = 50; // Ancho de la línea para el formato del correo
$mail->IsHTML(true); // Habilita el formato HTML en el cuerpo del correo

// Asunto del correo
$mail->Subject = "Contacto";

// Cuerpo del mensaje en formato HTML
$mail->Body = 
    "Nombre: $Nombre \n<br />" . 
    "Email: $Email \n<br />" . 
    "Mensaje: $Mensaje \n<br />" . 
    "pr1: $pr1 \n<br />" . 
    "pr2: $pr2 \n<br />";

// Añade el archivo adjunto al correo
$mail->AddAttachment($archivo['tmp_name'], $archivo['name']);

// Configura el servidor SMTP para enviar el correo
$mail->IsSMTP(); // Habilita el uso de SMTP
$mail->Host = "ssl://:465"; // Servidor de correo saliente (SMTP)
$mail->SMTPAuth = true; // Habilita la autenticación SMTP
$mail->Username = "mail@tudominio.com"; // Nombre de usuario del correo (dirección de correo)
$mail->Password = ""; // Contraseña del correo

// Envía el correo y muestra un mensaje según el resultado
if ($mail->Send()) {
   // Si el correo se envía correctamente, muestra un mensaje de éxito y redirige a la página de inicio
   echo '<div class="alert alert-success">Acción realizada</div> <script>setTimeout(function(){window.location="../index.php?pag=inicio";},50);</script>';
} else {
   // Si hay un error al enviar el correo, muestra el mismo mensaje y redirige (aquí podría haber un mensaje de error en su lugar)
   echo '<div class="alert alert-success">Acción realizada</div> <script>setTimeout(function(){window.location="../index.php?pag=inicio";},50);</script>';
}
?>
