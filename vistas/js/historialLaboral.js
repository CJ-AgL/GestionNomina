
$(".btnHistorialSalarial").click(function () {
    var idEmpleado = $(this).attr("idEmpleado");
    // Redirige a historialSalarial.php con el ID del empleado
        window.location = "index.php?ruta=historialLaboral&idEmpleado="+idEmpleado;

});


/*=============================================
 Función para cancelar la carga de documentos y redirigir a la página de empleados
=============================================*/

    document.getElementById('cancelarCargaH').addEventListener('click', function() {
        // Eliminar la variable de localStorage
        localStorage.removeItem('idEmpleado');

        // Redirigir a la página de empleados
        window.location.href = 'empleados'; // Reemplaza 'empleados' con la URL correcta
    });