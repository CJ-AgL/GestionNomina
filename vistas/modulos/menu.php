<aside class="main-sidebar">
    <section class="sidebar">

		<div class="user-panel">
		<div class="pull-left image">
		<img src="vistas/img/plantilla/usuer.png" class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">


			
		<p><?php echo $_SESSION["nombreUsuario"];?></p>
		<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
		</div>


        <ul class="sidebar-menu">
            <li class="active">
                <a href="inicio">
                    <img src="vistas/img/menu/hogar.png" class="imagen-ampliada" alt="User Image" width="25" style="margin-right: 5px;">
                    <span>INICIO</span>
                </a>
            </li>
            <li>
                <a href="empresas">
                      <img src="vistas/img/menu/fabrica.png" class="img-ampliada" alt="User Image" width="25" style="margin-right: 5px;" >
                    <span>EMPRESAS</span>
                </a>
            </li>

            <li class="header">EMPLEADOS - USUARIOS</li>
            <li class="treeview">
                <a href="#">
                     <img src="vistas/img/menu/empleados.png" class="img-ampliada" alt="User Image" width="25" style="margin-right: 5px;">
                    <span>ADMINISTRAR</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">2</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="empleados">
                            <i class="fa fa-circle-o"></i>Empleados
                        </a>
                    </li>
                    <li>
                        <a href="usuarios">
                            <i class="fa fa-circle-o"></i>Usuarios
                        </a>
                    </li>
                </ul>
            </li>

            <li class="header">NOMINA MENSUAL</li>
            <li class="treeview">
                <a href="#">
                    <img src="vistas/img/menu/ausencia.png" class="img-ampliada" alt="User Image" width="25" style="margin-right: 5px;">
                    <span>AUSENCIAS</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">3</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="solicitudesAusencias">
                            <i class="fa fa-circle-o"></i>Solicitud Ausencias
                        </a>
                    </li>
                    <li>
                        <a href="ausenciasPendientes">
                            <i class="fa fa-circle-o"></i>Solicitudes Pendientes
                        </a>
                    </li>
                    <li>
                        <a href="ausenciasAprobadas">
                            <i class="fa fa-circle-o"></i>Solicitudes Aprobadas
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                      <img src="vistas/img/menu/horas-extras.png" class="img-ampliada" alt="User Image" width="25" style="margin-right: 5px;">
                    <span>HORAS EXTRAS</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">3</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="hrsExtras">
                            <i class="fa fa-circle-o"></i>Registrar Horas Extras
                        </a>
                    </li>
                    <li>
                        <a href="hrsExtrasPendientes">
                            <i class="fa fa-circle-o"></i>Solicitudes Pendientes
                        </a>
                    </li>
                    <li>
                        <a href="hrsExtrasAprobadas">
                            <i class="fa fa-circle-o"></i>Solicitudes Aprobadas
                        </a>
                    </li>
                </ul>
            </li>

              <li class="treeview">
                <a href="#">
                      <img src="vistas/img/menu/comision.png" class="img-ampliada" alt="User Image" width="25" style="margin-right: 5px;">
                    <span>COMSIONES VENTAS</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">3</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="comisionesRegistro">
                            <i class="fa fa-circle-o"></i>Registrar Ventas
                        </a>
                    </li>
                    <li>
                        <a href="comisionesCalculos">
                            <i class="fa fa-circle-o"></i>Calcular Comisiones
                        </a>
                    </li>
                    <li>
                        <a href="comisionesInforme">
                            <i class="fa fa-circle-o"></i>Historial Comisiones 
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="vistas/img/menu/dar-dinero.png" class="img-ampliada" alt="User Image" width="25" style="margin-right: 5px;">
                    <span>ANTICIPOS</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">3</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="anticipos">
                            <i class="fa fa-circle-o"></i>Solicitar Anticipo
                        </a>
                    </li>
                    <li>
                        <a href="solicitudesPendientes">
                            <i class="fa fa-circle-o"></i>Solicitudes Pendientes
                        </a>
                    </li>
                    <li>
                        <a href="solicitudesAceptadas">
                            <i class="fa fa-circle-o"></i>Solicitudes Aprobadas
                        </a>
                    </li>
                </ul>
            </li>


            <li class="header">PRESTAMOS Y ESTADO DE CUENTA</li>
             <li class="treeview">
                <a href="#">
                      <img src="vistas/img/menu/banco.png" class="img-ampliada" alt="User Image" width="25" style="margin-right: 5px;">
                    <span>PRESTAMOS</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">3</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="prestamosSolicitud">
                            <i class="fa fa-circle-o"></i>Solicitar Prestamo
                        </a>
                    </li>
                    <li>
                        <a href="prestamosPendientes">
                            <i class="fa fa-circle-o"></i>Prestamos Pendientes
                        </a>
                    </li>
                    <li>
                        <a href="prestamosAprobados">
                            <i class="fa fa-circle-o"></i>Historial Prestamos 
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                      <img src="vistas/img/menu/transferencias.png" class="img-ampliada" alt="User Image" width="25" style="margin-right: 5px;">
                    <span>TRANSFERENCIAS</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">3</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="transferenciasRegistro">
                            <i class="fa fa-circle-o"></i>Realizar Pagos 
                        </a>
                    </li>
                    <li>
                        <a href="transferenciasPendientes">
                            <i class="fa fa-circle-o"></i>Transferencias Pendientes
                        </a>
                    </li>

                    <li>
                        <a href="transferenciasAprobación">
                            <i class="fa fa-circle-o"></i>Transferencias Aprobadas
                        </a>
                    </li>
                </ul>
            </li>

           
            <li class="header">TIENDA SOLIDARISTA Y VENTAS</li>
            <li class="treeview">
                <a href="#">
                    <img src="vistas/img/menu/tienda.png" class="img-ampliada" alt="User Image" width="25" style="margin-right: 5px;">
                    <span>TIENDA</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">2</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="categorias">
                            <i class="fa fa-circle-o"></i>Categorias
                        </a>
                    </li>
                    <li>
                        <a href="productos">
                            <i class="fa fa-circle-o"></i>Productos
                        </a>
                    </li>
                    
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="vistas/img/menu/ventas.png" class="img-ampliada" alt="User Image" width="25" style="margin-right: 5px;">
                    <span> COMPRAS</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">3</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>Administrar Ventas
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>Registrar Ventas
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>Reporte Ventas
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
    </section>
</aside>
