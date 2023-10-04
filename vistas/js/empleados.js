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
    $("#editarEmail").val(respuesta["correoElectronico"]);
    

    
    }

    });

})



/*=============================================
ELIMINAR EMPLEADO
=============================================*/


$(document).on("click", ".btnEliminarEmpleado", function(){

    var idEmpleado = $(this).attr("idEmpleado");


    swal({

        title: '¿Está seguro de borrar esta empleado?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar Empleado!',

    }).then((result)=>{

        if(result.value){

            window.location = "index.php?ruta=empleados&idEmpleado="+idEmpleado;
        }

    });

})

/*=============================================
Recuperar los datos del empleado desde localStorage
=============================================*/


  var idEmpleado = localStorage.getItem('idEmpleado');
  var nombreEmpleado = localStorage.getItem('nombreEmpleado');
  var apellidoEmpleado = localStorage.getItem('apellidoEmpleado');

  // Mostrar el nombre y apellido en el campo correspondiente
  document.getElementById('nombreApellidoEmpleado').value = nombreEmpleado + ' ' + apellidoEmpleado;
  // Actualizar el valor del campo oculto
  document.querySelector('input[name="idEmpleado"]').value = idEmpleado;

/*=============================================
Función para Cargar Documentos de Empleado
=============================================*/
function cargarDocumentos(idEmpleado, nombreEmpleado, apellidoEmpleado) {
    // Guardar los datos en localStorage
    localStorage.setItem('idEmpleado', idEmpleado);
    localStorage.setItem('nombreEmpleado', nombreEmpleado);
    localStorage.setItem('apellidoEmpleado', apellidoEmpleado);

    // Crear un formulario dinámico
    var form = document.createElement('form');
    form.method = 'POST';
    form.action = 'cargarDocumentos';

    // Crear un campo de entrada oculto para pasar el ID del empleado
    var inputIdEmpleado = document.createElement('input');
    inputIdEmpleado.type = 'hidden';
    inputIdEmpleado.name = 'idEmpleado';
    inputIdEmpleado.value = idEmpleado;

    // Agregar el campo de entrada al formulario
    form.appendChild(inputIdEmpleado);

    // Agregar el formulario a la página y enviarlo
    document.body.appendChild(form);
    form.submit();
}