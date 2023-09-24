<div id="back"></div>

<div class="login-box">
    <div class="login-logo">
        <img src="" class="img-responsive" style="padding: 30px 100px 0px 100px">
    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Ingresar al sistema</p>

        <form method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="ID de la Empresa" name="idEmpresa" id="idEmpresa"  required>
                <span class="glyphicon glyphicon-briefcase form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Nombre de Usuario" name="nombreUsuario"  id="nombreUsuario"required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" id="contrasena" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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
