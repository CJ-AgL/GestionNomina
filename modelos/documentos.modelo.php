 <?php

 require_once "conexion.php";


class ModeloDocumentos{

    /*=============================================
    AGREGAR DOCUMENTOS
    =============================================*/

    static public function mdlAgregarEmpleado($tabla, $datos) {

    }

    /*=============================================
    MOSTRAR DOCUMENTOS
    =============================================*/

    static public function mdlMostrarEmpleados($tabla, $item, $valor){

        if($item != null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();

        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();

            return $stmt -> fetchAll();

        }

        $stmt -> close();

        $stmt = null;

        }

}