  <div class="content-wrapper">
    
    <section class="content-header">

      <h1>
      Documentos

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

        <li class="active">Cargar Documentos</li>

      </ol>

    </section>

  <section class="content">

    <div class="row">


<!-- =========================================
            FORMULARIO
  ===========================================-->


      <div class="col-lg-5 col-xs-12">
        
        <div class="box box-success">
          
          <div class="box-header with-border">

            <form role="form" method="post">

            <div class="box-body">

                <div class="box">
                  
                <!-- =========================================
                               ENTRADA DEL EMPLEADO
                 ===========================================-->
                  <div class="form-group">
                  <input type="text" class="form-control" value="" readonly id="nombreApellidoEmpleado">
                  <input type="hidden" name="idEmpleado"  value="">

                  </div>

                  

                  <!-- =========================================
                       ENTRADA PARA EL NOMBRE DEL DOCUMENTO
                 ===========================================-->

                   <div class="form-group"> 

                      <div class="input-group"> 

                          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                          <input type="text" class="form-control input-lg" name="nuevoNombreD" placeholder="Ingresar nombre del documento" id="nuevoNombreD" required>

                      </div>

                  </div>

                <!-- =========================================
                               ENTRADA EL TIPO DE DOCUMENTO
                 ===========================================-->

                  <div class="form-group"> 

              <div class="input-group"> 

                  <span class="input-group-addon"><i class="fa fa-archive"></i></span>

                  <select class="form-control input-lg" name="nuevoTipo" id="nuevoTipo">
                    
                      <option value="">Tipo de documento</option>

                      <option value="DPI">DPI</option>

                      <option value="Certificados">Certificados y DipLomas</option>

                      <option value="Antecedentes">Antecedentes penales y policiacos</option>

                  </select>

              </div>

          </div>  
                 
                <!-- =========================================
                         ENTRADA PARA AGREGAR EL DOCUMENTO
                 ===========================================-->


                  <div class="form-group">
                      <label for="nuevoDocumento">Seleccionar Documento:</label>
                      <input type="file" class="form-control-file" name="nuevoDocumento" id="nuevoDocumento">
                  </div>

                      
            </div>

          </div>

            <div class="box-footer">
              
              <button type="submit" class="btn btn-primary pull-right">Guardar Documento</button>
 
            </div>

             </form>


           


          </div>

    </div>

</div>

<!-- =========================================
            LA TABLA DE PRODUCTOS
  ===========================================-->
      <div class="col-lg-7 ">
        
         <div class="box box-warning">
          
            <div class="box-header with-border"></div>

            <div class="box-body">
              
              <table class="table table-bordered table-striped dt-responsive tablas">
                
                <thead>
                  
                  <tr>
                    <th style="width: 10px;">#</th>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Documento</th>
                   
                  </tr>

                </thead>

                <tbody>
                  
              <?php 
                // Obtén el id del empleado almacenado en localStorage
                $idEmpleado = $_POST['idEmpleado'] ?? ''; // Asegúrate de obtener el idEmpleado de la forma adecuada

                echo "ID del Empleado: " . $idEmpleado; // Agrega esta línea para depurar


                $item = "idEmpleado";
                $valor = $idEmpleado;

                $documento = ControladorDocumentos::ctrMostrarDocumentosPorEmpleado($item, $valor);

                foreach ($documento as $key => $value) {
                echo '<tr>  
                    <td>' . ($key + 1) . '</td>
                    <td>' . $value["tipoDocumento"] . '</td>
                    <td>' . $value["nombreArchivo"] . '</td>
                    <td><a href="mostrarpdf?idDocumento=' . $value["idDocumento"] . '" target="_blank">Ver PDF</a></td>
                </tr>';

                    echo 'Valor de idDocumento: ' . $value["idDocumento"] . '<br>';


                }

                ?>

                </tbody>

              </table>

            </div>
            
        </div>

      </div>
      
    </div> 

  </section>

</div>

