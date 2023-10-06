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
        if (isset($_GET['idDocumento'])) {
            $idDocumento = $_GET['idDocumento'];

            // Obtén el contenido del PDF desde el modelo
            $contenidoPDF = ControladorDocumentos::obtenerContenidoPDFPorID($idDocumento);

            if ($contenidoPDF !== false) {
                // Establece las cabeceras para indicar que se va a mostrar un archivo PDF
                header('Content-Type: application/pdf');
                header('Content-Disposition: inline; filename="documento.pdf"');

                // Muestra el contenido del PDF
                echo $contenidoPDF;
            } else {
                echo 'Documento no encontrado.';
            }
        } else {
            echo 'ID de documento no proporcionado.';
        }
        ?>

        </script>
      </div>
    </div>
  </section>
</div>
