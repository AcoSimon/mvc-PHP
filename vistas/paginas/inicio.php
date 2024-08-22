<?php
// Verificar sesión y redirigir si no está validada
if (isset($_SESSION["validarIngreso"])) {
    if ($_SESSION["validarIngreso"] != "ok") {
        echo '<script>window.location ="./?page=inicio";</script>';
        return;
    }
} else {
    echo '<script>window.location ="./?page=login";</script>';
    return;
}

// Incluye el archivo de navegación administrativa
include "html/nav-admin.php";

// Redirigir según el nivel de usuario
if ($_SESSION["nivel"] == 1) {
    echo '<script>window.location ="./?page=inicioNivel1";</script>';
}
?>
<div class="container py-5">
</div>
