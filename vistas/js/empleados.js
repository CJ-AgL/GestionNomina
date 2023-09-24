// Función para Cargar Documentos de Empleado

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

