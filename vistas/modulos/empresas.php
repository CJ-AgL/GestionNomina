
  <div class="content-wrapper">
    
    <section class="content-header">

      <h1>
      Administrar Empresas

      </h1>

      <ol class="breadcrumb">

        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

        <li class="active">Administrar Empresas</li>

      </ol>

    </section>


  <section class="content">

      <div class="box">

        <div class="box-header with-border">

          <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregarEmpresa">
            
            Agregar Empresa

          </button>
        
        </div>


          <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
            
            <thead>
              
             <tr>
                
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Ingreso al sistema</th>
                <th style="width: 10px">Acciones</th>             

              </tr>

            </thead>

            <tbody>


              <?php 

              $item = null;
              $valor = null;

              $empresa = ControladorEmpresas::ctrMostrarEmpresa($item, $valor);

              foreach ($empresa as $key => $value) {
                
                echo '<tr>  
                      <td>'.($key+1).'</td>
                      <td>'.$value["nombreEmpresa"].'</td>
                      <td>'.$value["direccion"].'</td>
                      <td>'.$value["telefono"].'</td>
                      <td>'.$value["fechaCreacion"].'</td>
                      <td>
                        
                        <div class="btn-group">
                          
                          <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarEmpresa" idEmpersa="'.$value["idEmpresa"].'"><i class="fa fa-pencil"></i></button>
                          

                        </div>

                      </td>

                    </tr>';

              }

               ?>


            </tbody>

          </table>

        </div>
    
    </div>
  
  </section>

</div>
