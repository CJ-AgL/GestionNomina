/*=============================================
EDITAR EMPRESAS
=============================================*/
$(document).on("click", ".btnEditarEmpresa", function(){


  var idEmpresa = $(this).attr("idEmpresa");

  var datos = new FormData();
  datos.append("idEmpresa", idEmpresa);

  $.ajax({

      url:"ajax/empresas.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function(respuesta){

        $("#editarEmpresa").val(respuesta["nombreEmpresa"]);
        $("#editarDireccion").val(respuesta["direccion"]);
        $("#editarTelefono").val(respuesta["telefono"]);

      }

  });

})

/*=============================================
    REVISAR EMPRESAS YA REGISTRADOS
=============================================*/
$("#nuevaEmpresa").change(function(){

    $(".alert").remove();

    var Empresa = $(this).val();

    var datos = new FormData();
    datos.append("validarEmpresa", Empresa);

    $.ajax({
        url:"ajax/Empresas.ajax.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success:function(respuesta){

         if(respuesta){

            $("#nuevaEmpresa").parent().after('<div class="alert alert-warning">Este Empresa ya existe en la base de datos</div>');

            $("#nuevaEmpresa").val("");

         }

        }


    });

})
