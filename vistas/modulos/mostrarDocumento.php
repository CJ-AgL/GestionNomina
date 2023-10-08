<?php 

$idDocumento = $_GET['idDocumento'] ?? '';

?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Manual de usuarios</h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Manual de usuarios</li>
    </ol>
  </section>

  <section class="content">
    <div class="box">
      <div class="box-body">
                <?php
                    

            if (!empty($documento)) {


              // Llama al controlador para obtener el contenido del documento por su id
            $documento = ControladorDocumentos::ctrObtenerDocumentoPorId($idDocumento);
                // Recupera el contenido del documento desde la base de datos
                $contenido = $documento[0]['contenido'];

                // Configura las cabeceras HTTP para que el navegador entienda que se trata de un archivo PDF
                header('Content-Type: application/pdf');
                header('Content-Disposition: inline; filename="documento.pdf"'); // Cambia el nombre del archivo según sea necesario

                // Imprime el contenido del PDF
                echo $contenido;
            } else {
                // Maneja el caso en que no se encuentre el documento
                echo 'Documento no encontrado.';
            }

        ?>

        </script>
      </div>
    </div>
  </section>
</div>
