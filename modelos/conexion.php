<?php
class Conexion
{
    // Método estático para establecer la conexión a la base de datos
    public static function conectar()
    {
        // Se crea una nueva instancia de PDO para conectarse a la base de datos MySQL
        // Parámetros:
        // - Host: dirección IP del servidor de la base de datos
        // - dbname: nombre de la base de datos
        // - Usuario: nombre de usuario para la conexión
        // - Contraseña: contraseña para la conexión
        $link = new PDO('mysql:host=193.203.175.97; dbname=u637818572_mvc_php', 'u637818572_mvc_php', 'u637818572_PHP-151206');

        // Línea de conexión comentada (posiblemente usada para conexión a otra base de datos)
        // $link = new PDO('mysql:host=159.223.196.41; dbname=sistemacontableNuevo', 'remoto', 'Dep-sistemas2021');

        // Configura la conexión para usar el conjunto de caracteres UTF-8
        $link->exec("set names utf8");

        // Retorna la conexión establecida (objeto PDO)
        return $link;
    }
}
