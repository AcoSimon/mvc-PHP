<?php 
// Requiere los archivos de los controladores y modelos necesarios
// Se asegura de que estos archivos se incluyan antes de continuar con la ejecución del script
require_once "controladores/home.controlador.php"; // Controlador para la página de inicio
require_once "controladores/formularios.controlador.php"; // Controlador para manejar formularios
require_once "modelos/formularios.modelo.php"; // Modelo para interactuar con la base de datos en relación a los formularios

// Crea una nueva instancia del controlador de la página de inicio
$home = new ControladorHome();

// Llama al método que maneja la lógica para traer y mostrar la página de inicio
$home->ctrTraerHome();
