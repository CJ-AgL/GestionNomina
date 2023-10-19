<?php $idEmpleado = $_GET['idEmpleado'] ?? '';?>

  <div class="content-wrapper">
    
    <section class="content-header">

      <h1>
      Administrar Historial Laboral

      </h1>

      <ol class="breadcrumb">

        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

        <li class="active">Administrar Historial Laboral</li>

      </ol>

    </section>


  <section class="content">

      <div class="box">

        <div class="box-header with-border">

          <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregarHistorial">
            
            Agregar Datos 

          </button>
        
        </div>


          <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Departamento</th>
                <th>Cargo</th>
                <th>Salario</th>
                <th>fechaIngreso</th>
                <th>fechaSalida</th>
                <th>Acciones</th>
              

              </tr>

            </thead>

            <tbody>
            <?php

            // Verificar si $idEmpleado es un número válido
            if (is_numeric($idEmpleado) && $idEmpleado > 0) {
                $item = 'idEmpleado';
                $valor = $idEmpleado;

                var_dump($item);
                var_dump($valor);
                 var_dump($idEmpleado);
               

                $historial = ControladorHistoriales::ctrMostrarHistorialPorId($item, $valor);

                foreach ($historial as $key => $value) {
                    echo '<tr>  
                        <td>'.($key+1).'</td>
                        <td>'.$value["departamento"].'</td>
                        <td>'.$value["cargo"].'</td>
                        <td>'.$value["salario"].'</td>
                        <td>'.$value["fechaIngreso"].'</td>
                        <td>'.$value["fechaSalida"].'</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-warning btnEditarHistorial" idHistorial="'.$value["idHistorial"].'" data-toggle="modal" data-target="#modalEditarHistorial"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger btnEliminarHistorial" idHistorial="'.$value["idHistorial"].'"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>';
                }
            } else {
                echo "El valor de idEmpleado no es válido.";
            }
            ?>

            </tbody>

          </table>

        </div>
    
    </div>
  
  </section>

</div>

  <!-- =========================================
               MODAL AGREGAR HISTORIAL
    ===========================================-->

   
  <!-- Modal -->
  <div id="modalAgregarHistorial" class="modal fade" role="dialog">

    <div class="modal-dialog">

      
      <div class="modal-content">

          <form role="form" method="post">  
    <!-- =========================================
               CABEZA DEL MODAL
    ===========================================-->

        <div class="modal-header" style="background: #2f4540; color: white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar categoría</h4>

        </div>

<!-- =========================================
             CUERPO DEL MODAL
  ===========================================-->
      <div class="modal-body">
      
      <div class=" box-body">

        <!-- ENTRADA PARA ID EMPLEADO -->

         <div class="form-group"> 

            <div class="input-group"> 
                        
                        <input type="hidden" name="idEmpleado" id="idEmpleado" value="<?php echo $idEmpleado; ?>">
                </div>

            </div>


               <!-- ENTRADA PARA  FECHA DE INGRESO -->

                          <div class="form-group"> 

                              <div class="input-group"> 

                                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                  <label for="fecha">Fecha de Ingreso:</label>
                                  <input type="date" class="form-control input-lg" name="nuevaFechaI" id="nuevaFechaI" placeholder="Ingresar fecha de Nacimiento" required>

                              </div>

                    </div>

                
                        <!-- ENTRADA PARA EL DEPARTAMENTO -->
                          
                           <div class="form-group"> 

                              <div class="input-group"> 

                                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                                  <select class="form-control input-lg" name="nuevoDepartamentoT" id="nuevoDepartamentoT">
                                    
                                      <option value="">Departamento</option>

                                     <option value="Recursos Humanos">Recursos Humanos</option>
                                    <option value="Finanzas y Contabilidad">Finanzas y Contabilidad</option>
                                    <option value="Ventas y Marketing">Ventas y Marketing</option>
                                    <option value="Operaciones">Operaciones</option>
                                    <option value="Tecnología de la Información">Tecnología de la Información</option>
                                    <option value="Servicio al Cliente">Servicio al Cliente</option>
                                    <option value="Calidad">Calidad</option>
                                    <option value="Desarrollo de Productos">Desarrollo de Productos</option>
                                    <option value="Legal y Cumplimiento">Legal y Cumplimiento</option>
                                    <option value="Compras y Adquisiciones">Compras y Adquisiciones</option>
                                    <option value="Comunicaciones Corporativas">Comunicaciones Corporativas</option>
                                    <option value="Planificación Estratégica">Planificación Estratégica</option>

                                  </select>

                              </div>

                          </div>

                   <!-- ENTRADA PARA EL CARGO -->
                  
                   <div class="form-group"> 

                      <div class="input-group"> 

                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                          <select class="form-control input-lg" name="nuevoCargo" id="nuevoCargo">
                            
                              <option value="">Cargo</option>

                              <option value="Gerente General">Gerente General</option>
                              <option value="Director de Recursos Humanos">Director de Recursos Humanos</option>
                              <option value="Director Financiero">Director Financiero</option>
                              <option value="Director de Marketing">Director de Marketing</option>
                              <option value="Director de Ventas">Director de Ventas</option>
                              <option value="Director de Tecnología de la Información">Director de Tecnología de la Información</option>
                              <option value="Director de Operaciones">Director de Operaciones</option>
                              <option value="Director de Servicio al Cliente">Director de Servicio al Cliente</option>
                              <option value="Abogado General">Abogado General</option>
                              <option value="Director de Calidad">Director de Calidad</option>
                              <option value="Gerente de Recursos Humanos">Gerente de Recursos Humanos</option>
                              <option value="Gerente de Finanzas">Gerente de Finanzas</option>
                              <option value="Gerente de Marketing">Gerente de Marketing</option>
                              <option value="Gerente de Ventas">Gerente de Ventas</option>
                              <option value="Gerente de Tecnología de la Información">Gerente de Tecnología de la Información</option>
                              <option value="Gerente de Operaciones">Gerente de Operaciones</option>
                              <option value="Gerente de Servicio al Cliente">Gerente de Servicio al Cliente</option>
                              <option value="Gerente de Proyectos">Gerente de Proyectos</option>
                              <option value="Analista de Datos">Analista de Datos</option>
                              <option value="Especialista en Marketing Digital">Especialista en Marketing Digital</option>
                              <option value="Especialista en Recursos Humanos">Especialista en Recursos Humanos</option>
                              <option value="Especialista en Finanzas">Especialista en Finanzas</option>
                              <option value="Técnico de Soporte Técnico">Técnico de Soporte Técnico</option>
                              <option value="Asistente Administrativo">Asistente Administrativo</option>
                        
                        </select>

                     </div>

                </div>

                 <!-- ENTRADA PARA SALARIO -->

                             <div class="form-group row">

                                <div class="col-xs-6">
                                
                                  <div class="input-group">
                                  
                                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                    <input type="number" class="form-control input-lg" id="nuevoSalario" name="nuevoSalario" step="any" min="0" placeholder="Salario" required>

                                  </div>

                                </div>

                          </div>

      </div>  


</div>
<!-- =========================================
             PIE DEL MODAL
  ===========================================-->
      <div class="modal-footer">

        <button type="button" class="btn btn-default  pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-success">Guardar categoria</button>

      </div>

  

      </form>

    </div>

  </div>

</div>



<!-- =========================================
               MODAL EDITAR CATEGORIA
    ===========================================-->

   
  <!-- Modal -->
  <div id="modalEditarCategoria" class="modal fade" role="dialog">

    <div class="modal-dialog">

      
      <div class="modal-content">

          <form role="form" method="post">  
    <!-- =========================================
               CABEZA DEL MODAL
    ===========================================-->

        <div class="modal-header" style="background: #2f4540; color: white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar categoría</h4>

        </div>

<!-- =========================================
             CUERPO DEL MODAL
  ===========================================-->
      <div class="modal-body">
      
      <div class=" box-body">

        <!-- ENTRADA PARA EL NOMBRE -->

          <div class="form-group"> 

              <div class="input-group"> 

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" required>

                  <input type="hidden" name="idCategoria" id="idCategoria" required>

              </div>

          </div>

      </div>  


</div>
<!-- =========================================
             PIE DEL MODAL
  ===========================================-->
      <div class="modal-footer">

        <button type="button" class="btn btn-default  pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-success">Guardar cambios</button>

      </div>



      </form>

    </div>

  </div>

</div>
