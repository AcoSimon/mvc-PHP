<!-- Bootstrap 5: Framework CSS y JS para diseño responsivo -->
<script src="assets/js/b5.1/bootstrap.bundle.min.js"></script>

<!-- jQuery: Biblioteca JavaScript para simplificar manipulaciones del DOM -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- DataTables: Plugin jQuery para mejorar la presentación de tablas HTML -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>

<!-- jQuery CDN: Incluye una versión específica de jQuery -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- DataTables CDN: Incluye la biblioteca para crear tablas interactivas -->
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>
  // Inicializa DataTables cuando el documento esté listo, aplicando el plugin a la tabla con el id 'userTable'
  $(document).ready(function() {
    $('#userTable').DataTable();
  });
</script>

<script>
  // Inicializa DataTables para una tabla con el id 'example' cuando el documento esté listo
  $(document).ready( function () {
    $('#example').DataTable();
  });
</script>

<script>
/* 
   Esta función es un placeholder vacío, no hace nada actualmente
   La declaración debería incluir un nombre para ser válida.
*/
function{
}

// Cuando el documento esté listo, ejecuta el siguiente código
$(document).ready(function(){
    
    // Evento click para añadir una nueva fila a la tabla
    $(document).on('click', '.add', function(){
        var html = '';
        html += '<tr>';
        html += '<td><select name="" class="form-select item_unit"><option selected>Seleccionar producto</option><?php ?></select></td>';
        html += '<td><div class="input-group"><span class="input-group-text" id="basic-addon1">$</span><input type="text" name="" class="form-control item_quantity" onchange="sumar(this.value);"></div></td>';
        html += '<td><input type="text" name="" class="form-control item_name" ></td>';
        html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="bi bi-dash-circle"></i></button></td></tr>';
        
        // Añade la nueva fila a la tabla con el id 'item_table'
        $('#item_table').append(html);
    });

    // Evento click para eliminar la fila seleccionada de la tabla
    $(document).on('click', '.remove', function(){
        $(this).closest('tr').remove();
    });

    // Manejo del formulario al enviarlo
    $('#insert_form').on('submit', function(event){
        event.preventDefault(); // Previene el envío por defecto del formulario
        var error = '';

        // Verifica que cada campo 'item_name' no esté vacío
        $('.item_name').each(function(){
            var count = 1;
            if($(this).val() == '')
            {
                error += "<p>Enter Item Name at "+count+" Row</p>";
                return false;
            }
            count = count + 1;
        });

        // Verifica que cada campo 'item_quantity' no esté vacío
        $('.item_quantity').each(function(){
            var count = 1;
            if($(this).val() == '')
            {
                error += "<p>Enter Item Quantity at "+count+" Row</p>";
                return false;
            }
            count = count + 1;
        });

        // Verifica que cada campo 'item_unit' no esté vacío
        $('.item_unit').each(function(){
            var count = 1;
            if($(this).val() == '')
            {
                error += "<p>Select Unit at "+count+" Row</p>";
                return false;
            }
            count = count + 1;
        });

        // Si no hay errores, serializa el formulario y lo envía vía AJAX
        var form_data = $(this).serialize();
        if(error == '')
        {
            $.ajax({
                url:"insert.php", // URL del script donde se enviarán los datos
                method:"POST", // Método HTTP utilizado
                data:form_data, // Datos del formulario serializados
                success:function(data)
                {
                    if(data == 'ok')
                    {
                        // Si la respuesta es 'ok', limpia la tabla y muestra un mensaje de éxito
                        $('#item_table').find("tr:gt(0)").remove();
                        $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
                    }
                }
            });
        }
        else
        {
            // Si hay errores, muestra un mensaje de error
            $('#error').html('<div class="alert alert-danger">'+error+'</div>');
        }
    });
});
</script>

<script>
/* Función para sumar un valor al total */
function sumar(valor){
    var total = 0;

    // Convierte el valor a un entero
    valor = parseInt(valor);

    // Obtiene el valor actual del total, si no existe, lo inicializa a 0
    total = document.getElementById('spTotal').innerHTML;
    total = (total == null || total == undefined || total == "") ? 0 : total;

    // Suma el valor actual al total
    total = (parseInt(total) + parseInt(valor));

    // Actualiza el contenido del elemento con id 'spTotal' con el nuevo total
    document.getElementById('spTotal').innerHTML = total;
}
</script>

</body>
</html>
