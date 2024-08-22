<?php
class ControladorFormularios
{
    // Método para manejar el inicio de sesión
    public function ctrIngreso()
    {
        // Verifica si se ha enviado el formulario con el campo 'usuario' y que no esté vacío
        if (isset($_POST["usuario"]) && $_POST["usuario"] != null) {
            // Nombre de la tabla en la base de datos
            $tabla = "usuario";
            // Nombre de la columna a buscar
            $item = "usuario";
            // Valor del usuario ingresado en el formulario
            $valor = $_POST["usuario"];

            // Llama al modelo para seleccionar registros en la base de datos
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            // Verifica si se ha enviado el campo 'pass' en el formulario
            if (isset($_POST["pass"])) {
                // Compara los datos del formulario con los datos de la base de datos
                if ($respuesta[0]["usuario"] == $_POST["usuario"] && $respuesta[0]["contra"] == $_POST["pass"]) {
                    // Si las credenciales coinciden, inicia la sesión del usuario
                    $_SESSION["validarIngreso"] = "ok";
                    $_SESSION["id"] = $respuesta[0]["id"];
                    $_SESSION["nivel"] = $respuesta[0]["nivel"];
                    
                    // Redirige al usuario a la página de inicio
                    echo '<script>window.location ="./?page=inicio";</script>';
                } else {
                    // Si las credenciales no coinciden, muestra un mensaje de error
                    echo '<div class="alert alert-danger">Error de ingreso</div>';
                }
            } else {
                // Si no se ha ingresado la contraseña, muestra un mensaje de error
                echo '<div class="alert alert-danger">Error de ingreso</div>';
            }
        }
    }

    // Método estático para seleccionar múltiples registros utilizando fetchAll
    public static function ctrSelecionarVariosfethall($tabla, $item, $valor)
    {
        // Llama al modelo para seleccionar registros en la base de datos
        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

        // Retorna los registros seleccionados
        return $respuesta;
    }
}
