<div id="back"></div>

<div class="login-box">
    <div class="login-logo">
        <img src="" class="img-responsive" style="padding: 30px 100px 0px 100px">
    </div>

    <div class="login-box-body">
        <p class="login-box-msg">INGRESAR AL SISTEMA</p>

        <form method="post">
             <div class="form-group">

                <!-- ENTRADA PARA LA EMPRESA -->

                  
                  <div class="input-group ">
                    
                    <span class="input-group-addon"><i class="fa fa-university"></i></span>
                    
                    <select id="idEmpresa" name="idEmpresa" class="form-control select2" required>

                    <option value="" disabled selected>Seleccionar Empresa</option>

                    <?php

                      $item = null;
                      $valor = null;

                      $empresa = ControladorEmpresas::ctrMostrarEmpresa($item, $valor);

                       foreach ($empresa as $key => $value) {
                       
                         echo '<option value="'.$value["idEmpresa"].'">'.$value["nombreEmpresa"].'</option>';

                       }

                    ?>

                    </select>
                    
                  </div>
                
                </div>

            <!-- ENTRADA PARA EL USUARIO -->

            <div class="form-group"> 

              <div class="input-group"> 

                  <span class="input-group-addon"><i class="fa fa-address-card"></i></span>

                  <input type="text" class="form-control input-lg" name="nombreUsuario" placeholder="Ingresar usuario" id="nombreUsuario"required>

              </div>

          </div>

          
             <!-- ENTRADA PARA EL CONTRASEÑA -->
          
           <div class="form-group"> 

              <div class="input-group"> 

                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                  <input type="password" class="form-control input-lg" name="contrasena" id="contrasena" placeholder="Ingresar Contraseña" required>

              </div>

          </div>

            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-success btn-flat">Ingresar</button>
                </div>
            </div>

             <?php 

                $login = new ControladorUsuarios();
                $login -> ctrIngresoUsuario();

               ?>

        </form>
    </div>
</div>
