<?php
// Inicia la sesión o reanuda la sesión existente
session_start();

// Incluye el archivo de cabecera (header.php)
include "html/header.php";

// Obtiene la fecha actual en formato "YYYY-MM-DD"
$hoy = date("Y") . "-" . date("m") . "-" . date("d");

?>

<?php
// Verifica si se ha pasado un parámetro 'page' en la URL
if (isset($_GET["page"])) {
    // Verifica si el valor de 'page' es uno de los permitidos
    if ($_GET["page"] == "login" || 
        $_GET["page"] == "salir" || 
        $_GET["page"] == "inicio") {

        // Incluye el archivo correspondiente a la página solicitada
        include "paginas/" . $_GET["page"] . ".php";
    } else {
        // Si la página no es válida, muestra la página de error 404
        include "paginas/error404.php";
    }
} else {
    // Si no se ha especificado una página, verifica si el usuario ha iniciado sesión
    if (isset($_SESSION["id"])) {
        // Si la sesión está activa, incluye la página de inicio
        include "paginas/inicio.php";
    } else {
        // Si no hay sesión activa, redirige a la página de login
        include "paginas/login.php";
    }
}
?>

<?php
// Incluye el archivo de pie de página (footer.php)
include "html/footer.php";
?>
