<?php 

$idDocumento = $_GET['idDocumento'] ?? '';

?>

<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    </ol>
  </section>

  <section class="content">
    <div class="box">
      <div class="box-body">
        
        <?php

                  //var_dump($idEmpleado);


                  // Comprueba si idEmpleado es un número válido antes de usarlo en la consulta
                 if (is_numeric($idDocumento)) {
                      $item = "contenido";
                      $valor = $idDocumento;

                      $documento = ControladorDocumentos::ctrMostrarDocumentosPorEmpleado($item, $valor);

                      // Verifica si se encontraron documentos
                      if (!empty($documento)) {
                          foreach ($documento as $key => $value) {
                              echo '<tr>  
                                  <td>' . $value["contenido"] . '</td>
                                  

                              </tr>';
                          }
                      } else {
                          echo '<tr><td colspan="4">No se encontraron documentos para este empleado.</td></tr>';
                      }
                  } else {
                      echo "El idEmpleado no es válido.";
                  }
                  ?>
     



      
      </div>
    </div>
  </section>
</div>
