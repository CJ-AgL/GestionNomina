<?php

class ControladorAnticipos {


/*=========================================
           MOSTRAR ANTICIPOS
  ===========================================*/

    static public function ctrMostrarAnticipos($item, $valor)
    {
        $tabla = "anticipos";
        $respuesta = ModeloAnticipos::mdlMostrarAnticipos($tabla, $item, $valor);
         // Verifica si $respuesta es null y, si lo es, devuelve un arreglo vacío
        return ($respuesta != null) ? $respuesta : array();
    }

/*=========================================
        CREAR SOLICITUD REGISTRO
  ===========================================*/
 
        static public function ctrAgregarAnticipo(){

          if(isset($_POST["nuevoMonto"])){

            if(preg_match('/^\d+(\.\d+)?$/', $_POST["nuevoMonto"]) &&
              preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ. ]+$/',  $_POST["nuevoMotivo"])){

                $tabla = "anticipos";

                $datos = array("idEmpleado"=>$_POST["idEmpleado"],
                           "monto"=>$_POST["nuevoMonto"],
                           "motivo"=>$_POST["nuevoMotivo"]);

                $respuesta = ModeloAnticipos::mdlCrearSolicitudAnticipo($tabla, $datos);

                if($respuesta == "ok"){

                echo'<script>

                swal({
                    type: "success",
                    title: "La solicitud ha sido guardado correctamente",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                    }).then((result) => {
                        if (result.value) {

                        window.location = "anticipos";

                        }
                      })

                </script>';

              }

            }else{

              echo '<script>

                  swal({

                      type: "error",
                      title: "!Error en la carga de los datos, intente nuevamente!", 
                      showConfirmButton: true,
                      confirmButtonText: "Cerrar",
                      closeOnConfirm: false

                      }).then((result)=>{

                          if(result.value){

                            window.location = "anticipos";
                          }

                        })

                </script>';

              }

            }

        }


    /*=========================================
           BORRAR EMPRESA
    ===========================================*/

    static public function ctrBorrarAnticipo(){

        if(isset($_GET["idAnticipo"])){

            $tabla = "anticipos";
            $datos = $_GET["idAnticipo"];

            $respuesta = ModeloAnticipos::mdlBorrarAnticipo($tabla, $datos);

            if($respuesta == "ok"){

                echo '<script>

                    swal({

                            type: "success",
                            title: "La empresa ha sido borrada correctamente", 
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false

                            }).then((result)=>{

                                    if(result.value){

                                        window.location = "anticipos";
                                    }

                                })

                </script>';


            }

        }

    }
      }

