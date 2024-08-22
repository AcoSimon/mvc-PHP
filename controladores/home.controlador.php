<?php 
class ControladorHome {
    // Método para mostrar la página principal (home)
    public function ctrTraerHome() {
        // Incluye el archivo "home.php" ubicado en la carpeta "vistas"
        // Este archivo contiene el código HTML y PHP que se mostrará como la página principal
        include "vistas/home.php";
    }
}
