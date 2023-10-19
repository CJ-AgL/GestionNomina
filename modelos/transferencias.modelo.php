<?php require_once "conexion.php";

class ModeloTransferencias {
    
    /*=========================================
           MOSTRAR TRANSFERENCIAS 
    ===========================================*/
   
    static public function mdlMostrarTransferencias($tabla, $item, $valor){
        if($item != null && $valor != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        $stmt->close();
        $stmt = null;
    }

    /*=========================================
           MOSTRAR TRANSFERENCIAS PINFORMES
    ===========================================*/
   
    static public function mdlMostrarTransferenciasI($tabla, $item, $valor){
        if($item != null && $valor != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        $stmt->close();
        $stmt = null;
    }

    /*=========================================
           MOSTRAR TRANSFERENCIAS PENDIENTES
    ===========================================*/

    static public function mdlMostrarTransferenciasPendientes($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = 'pendiente'");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /*=========================================
           MOSTRAR TRANSFERENCIAS ACEPTADOS
    ===========================================*/

    static public function mdlMostrarTransferenciasAceptados($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = 'aprobado'");
        $stmt->execute();
        return $stmt->fetchAll();
    }

}