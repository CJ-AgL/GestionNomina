<?php

require_once "conexion.php";

class ModeloAusencias {


/*=========================================
           MOSTRAR AUSENCIAS
  ===========================================*/
   
    static public function mdlMostrarAusencia($tabla, $item, $valor){

        if($item != null && $valor != null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

            $stmt -> execute();

            return $stmt -> fetchAll();

        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();

            return $stmt -> fetchAll();

        }

        $stmt -> close();

        $stmt = null;

    }

     /*=============================================
    AGREGAR SOLICITUD AUSENCIAS
    =============================================*/
    static public function mdlCrearAusencia($tabla, $datos) {
        try {
            $conexion = Conexion::conectar();
            $stmt = $conexion->prepare("INSERT INTO $tabla (idEmpleado, codigo, fechaInicio, fechaFin, razon, diasAusencia, motivo) VALUES (:idEmpleado, :codigo, :fechaInicio, :fechaFin, :razon, :diasAusencia, :motivo)");

            $stmt->bindParam(":idEmpleado", $datos["idEmpleado"], PDO::PARAM_INT);
            $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
            $stmt->bindParam(":fechaInicio", $datos["fechaInicio"], PDO::PARAM_STR);
            $stmt->bindParam(":fechaFin", $datos["fechaFin"], PDO::PARAM_STR);
            $stmt->bindParam(":razon", $datos["razon"], PDO::PARAM_STR);
            $stmt->bindParam(":diasAusencia", $datos["diasAusencia"], PDO::PARAM_STR);
            $stmt->bindParam(":motivo", $datos["motivo"], PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error"; // Puedes personalizar el mensaje de error según tu lógica.
        }
    }
}


