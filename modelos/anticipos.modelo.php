<?php

require_once "conexion.php";

class ModeloAnticipos {


/*=========================================
           MOSTRAR ANTICIPOS
  ===========================================*/
   
    static public function mdlMostrarAnticipos($tabla, $item, $valor){

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
    AGREGAR SOLICITUD ANTICIPO
    =============================================*/
    static public function mdlCrearSolicitudAnticipo($tabla, $datos) {
        try {
            $conexion = Conexion::conectar();
            $stmt = $conexion->prepare("INSERT INTO $tabla (idEmpleado, monto, motivo) VALUES (:idEmpleado, :monto, :motivo)");

            $stmt->bindParam(":idEmpleado", $datos["idEmpleado"], PDO::PARAM_INT);
            $stmt->bindParam(":monto", $datos["monto"], PDO::PARAM_INT);
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


    /*=========================================
           BORRAR ANTICIPO
  ===========================================*/

  static public function mdlBorrarAnticipo($tabla, $datos){


     $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idAnticipo = :idAnticipo");

    $stmt->bindParam(":idAnticipo", $datos, PDO::PARAM_STR);

    if($stmt->execute()){

            return "ok";

         }else{

            return "error";
         }

         $stmt->close();

         $stmt = null;


  }

}


