<div class="content-wrapper">
    <section class="content-header">
        <h1>Prestamos</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Solicitud Prestamo</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- Formulario de Solicitud de Anticipos -->
            <div class="col-lg-4 col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Solicitar Prestamo</h3>
                        <form role="form" method="post">
                            <div class="box-body">
                                <!-- Campo oculto para idEmpleado -->
                                <input type="hidden" name="idEmpleado" value="<?php echo $_SESSION["idEmpleado"]; ?>">
                                <!-- Campo oculto para código -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        <?php
                                        $item = null;
                                        $valor = null;
                                        $prestamo = ControladorPrestamos::ctrMostrarPrestamos($item, $valor);
                                        if (!$prestamo) {
                                            echo '<input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" value="701" readonly>';
                                        } else {
                                            foreach ($prestamo as $key => $value) {
                                            }
                                            $codigo = $value["codigo"] + 1;
                                            echo '<input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" value="' . $codigo . '" readonly>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- Campo para el monto -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                        <input type="number" class="form-control input-lg" name="nuevoMonto" placeholder="Ingrese el monto" min="0" required>
                                    </div>
                                </div>
                                <!-- Campo para el plazo de pago -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="number" class="form-control input-lg" name="nuevoPlazo" placeholder="Ingrese el plazo en meses" min="12" required>
                                    </div>
                                </div>

                                 <!-- Campo de entrada para el mes -->
                                <div class="form-group">
                                    <div class="input-group">
                                        </i></span>
                                        <?php
                                        $mesActual = date("F");
                                        echo '<input type="hidden" class="form-control input-lg" name="nuevoMes" id="nuevoMes" value="' . $mesActual . '" readonly>';
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success pull-right">Enviar Solicitud</button>
                                    <button type="button" class="btn btn-danger" id="cancelarCargaA">Cancelar</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        $crearPrestamo = new ControladorPrestamos();
                        $crearPrestamo->ctrAgregarPrestamos();
                        ?>
                    </div>
                </div>

                <!-- Especificaciones de cálculo de comisiones -->
            <div class="row">
            <div class="col-lg-12">
                <div class="box box-default">
                    <div class="box-header with-border"></div>
                    <div class="box-body">
                        <h4>Especificaciones</h4>
                        <ul>
                            <li>Fecha Aprobacion: Fecha de pago Mensual</li>
                            <li>Tasa de interés: 1.75% para todos los préstamos</li>
                           
                            <li>Plazo Pago mínimo: 12 meses</li>
                        </ul>
                    </div>
                </div>
            </div>
         </div>  

            <!-- Especificaciones de Monto Máximo de Préstamo -->
            <div class="row">
            <div class="col-lg-12">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h4>Especificaciones de Monto Máximo de Préstamo</h4>
                    </div>
                    <div class="box-body">
                        <ul>
                            <li>Sueldo de Q. 3,800:
                                <ul>
                                    <li>Monto Máximo del Préstamo: Q. 1,520</li>
                                </ul>
                            </li>
                            <li>Sueldo de Q. 4,600:
                                <ul>
                                    <li>Monto Máximo del Préstamo: Q. 1,840</li>
                                </ul>
                            </li>
                            <li>Sueldo de Q. 5,400:
                                <ul>
                                    <li>Monto Máximo del Préstamo: Q. 2,160</li>
                                </ul>
                            </li>
                            <li>Sueldo de Q. 6,200:
                                <ul>
                                    <li>Monto Máximo del Préstamo: Q. 2,480</li>
                                </ul>
                            </li>
                            <li>Sueldo de Q. 7,000:
                                <ul>
                                    <li>Monto Máximo del Préstamo: Q. 2,800</li>
                                </ul>
                            </li>
                            <li>Sueldo de Q. 7,800:
                                <ul>
                                    <li>Monto Máximo del Préstamo: Q. 3,120</li>
                                </ul>
                            </li>
                            <li>Sueldo de Q. 8,600:
                                <ul>
                                    <li>Monto Máximo del Préstamo: Q. 3,440</li>
                                </ul>
                            </li>
                            <li>Sueldo de Q. 9,400:
                                <ul>
                                    <li>Monto Máximo del Préstamo: Q. 3,760</li>
                                </ul>
                            </li>
                            <li>Sueldo de Q. 10,000:
                                <ul>
                                    <li>Monto Máximo del Préstamo: $4,000</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

            
            <!-- Tabla de Solicitudes de prestamos -->
            <div class="col-lg-8">
                <div class="box box-warning">
                    <div class="box-header with-border"></div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">No.</th>
                                    <th>Codigo</th>
                                    <th>Monto</th>
                                    <th>Plazo Pago</th>
                                    <th>Cuotas</th>
                                    <th>Total a Pagar</th>
                                    <th>Estado</th>
                                    <th>Fecha solicitud</th>
                                    <th>Fecha aprobación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $idEmpleado = $_SESSION["idEmpleado"];
                                $item = "idEmpleado";
                                $valor = $idEmpleado;
                                $prestamo = ControladorPrestamos::ctrMostrarPrestamos($item, $valor);
                                foreach ($prestamo as $key => $value) {
                                    echo '<tr>
                                        <td>' . ($key + 1) . '</td>
                                        <td>' . $value["codigo"] . '</td>
                                        <td>' . $value["montoPrestamo"] . '</td>
                                        <td>' . $value["plazoPago"] . '</td>
                                        <td>' . $value["cuotaMensual"] . '</td>
                                        <td>' . $value["totalPago"] . '</td>
                                        <td>' . $value["estado"] . '</td>
                                        <td>' . $value["fechaIngreso"] . '</td>
                                        <td>' . $value["fechaAprobacion"] . '</td>
                                    </tr>';
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
