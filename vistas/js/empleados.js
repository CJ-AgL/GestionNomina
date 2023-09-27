/*=============================================
    EDITAR CLIENTE
=============================================*/

$(document).on("click", ".btnEditarEmpleado", function(){
    

var idEmpleado = $(this).attr("idEmpleado");

var datos = new FormData();
datos.append("idEmpleado", idEmpleado);

$.ajax({

    url:"ajax/empleados.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType:"json",
    success:function(respuesta){

    $("#idEmpleado").val(respuesta["idEmpleado"]);
    $("#editarNombre").val(respuesta["nombre"]);
    $("#editarApellido").val(respuesta["apellido"]);
    $("#editarFecha").val(respuesta["fechaNacimiento"]);
    $("#editarGenero").val(respuesta["genero"]);
    $("#editarCivil").val(respuesta["estadoCivil"]);
    $("#editarDireccion").val(respuesta["departamento"]);
    $("#editarEmail").val(respuesta["email"]);
    
    
    }

    });

})

/*=============================================
Función para Cargar Documentos de Empleado
=============================================*/


function cargarDocumentos(idEmpleado) {
    // Crear un formulario dinámico
    var form = document.createElement('form');
    form.method = 'POST';
    form.action = 'cargarDocumentos';

    // Crear un campo de entrada oculto para pasar el ID del empleado
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'idEmpleado';
    input.value = idEmpleado;

    // Agregar el campo de entrada al formulario
    form.appendChild(input);

    // Agregar el formulario a la página y enviarlo
    document.body.appendChild(form);
    form.submit();
}
