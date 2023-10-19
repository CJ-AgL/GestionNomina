<?php

class ControladorTransferencias {


/*=========================================
           TRANSFERENCIA
  ===========================================*/

    static public function ctrMostrarTransferencias($item, $valor)
    {
        $tabla = "transferenciasBanco";
        $respuesta = ModeloTransferencias::mdlMostrarTransferencias($tabla, $item, $valor);
         // Verifica si $respuesta es null y, si lo es, devuelve un arreglo vacío
        return ($respuesta != null) ? $respuesta : array();
    }

    /*=========================================
           MOSTRAR  TRANSFERENCIA PINFORMES
  ===========================================*/

    static public function ctrMostrarTransferenciasI($item, $valor)
    {
        $tabla = "transferenciasBanco";
        $respuesta = ModeloTransferencias::mdlMostrarTransferenciasI($tabla, $item, $valor);
         // Verifica si $respuesta es null y, si lo es, devuelve un arreglo vacío
        return ($respuesta != null) ? $respuesta : array();
    }

    /*=========================================
           MOSTRAR  TRANSFERENCIA PENTDIENTES
  ===========================================*/

    static public function ctrMostrarTransferenciasPendientes($item, $valor)
    {
        $tabla = "transferenciasBanco";
        $respuesta = ModeloTransferencias::mdlMostrarTransferenciasPendientes($tabla, $item, $valor);
         // Verifica si $respuesta es null y, si lo es, devuelve un arreglo vacío
        return ($respuesta != null) ? $respuesta : array();
    }

    /*=========================================
           MOSTRAR  TRANSFERENCIA ACEPTADOS
  ===========================================*/

    static public function ctrMostrarTransferenciasAceptados($item, $valor)
    {
        $tabla = "transferenciasBanco";
        $respuesta = ModeloTransferencias::mdlMostrarTransferenciasAceptados($tabla, $item, $valor);
         // Verifica si $respuesta es null y, si lo es, devuelve un arreglo vacío
        return ($respuesta != null) ? $respuesta : array();
    }

        /*=========================================
            EMPLEADOS CON TRANSFERENCIA PENDIENTE
        ===========================================*/

        static public function ctrObtenerEmpleadosConAnticipoPendiente() {
        $estadoPendiente = "Pendiente"; // El estado de anticipo pendiente
        $empleadosConPendiente = ModeloEmpleadosPendientes::mdlObtenerEmpleadosConAnticipoPendiente($estadoPendiente);
        return $empleadosConPendiente;
    }
}