<?php
// Se requiere el archivo de conexión a la base de datos
require_once "conexion.php";

class ModeloFormularios
{
    // Método estático para seleccionar registros de la base de datos
    // $tabla: nombre de la tabla de la cual se quieren obtener los registros
    // $item: columna específica para aplicar el filtro (opcional)
    // $valor: valor que se busca en la columna especificada por $item (opcional)
    public static function mdlSeleccionarRegistros($tabla, $item, $valor)
    {
        // Si no se pasan $item ni $valor, selecciona todos los registros de la tabla
        if ($item == null && $valor == null) {
            // Prepara la consulta SQL para seleccionar todos los registros y ordenarlos por ID de forma descendente
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");
            // Ejecuta la consulta
            $stmt->execute();
            // Retorna todos los registros obtenidos
            return $stmt->fetchAll();
        } else {
            // Si se pasa $item y $valor, selecciona los registros que coincidan con $item y $valor
            // Prepara la consulta SQL para seleccionar registros con el filtro aplicado
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");
            // Vincula el valor del parámetro con la consulta
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            // Ejecuta la consulta
            $stmt->execute();
            // Retorna los registros filtrados
            return $stmt->fetchAll();
        }

        // Cierra la conexión al statement (stmt) y libera los recursos
        $stmt->close();
        $stmt = null;
    }

}
