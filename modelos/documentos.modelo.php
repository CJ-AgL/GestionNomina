 <?php

 require_once "conexion.php";


class ModeloDocumentos{


    /*=============================================
    MOSTRAR DOCUMENTOS
    =============================================*/

    static public function mdlMostrarDocuemento($tabla, $item, $valor){

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

    /*=============================================
    MOSTRAR DOCUMENTOS POR EMPLEADO
    =============================================*/

        public static function mdlMostrarDocumentosPorEmpleado($tabla, $item, $valor) {
        if ($item != null && $valor != null) {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }

    public static function obtenerContenidoPDFPorID($idDocumento)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT contenido FROM tu_tabla WHERE idDocumento = :idDocumento");
            $stmt->bindParam(':idDocumento', $idDocumento, PDO::PARAM_INT);
            $stmt->execute();

            // Verifica si se encontró un resultado.
            if ($stmt->rowCount() > 0) {
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                return $resultado['contenido'];
            } else {
                return false; // No se encontró el documento.
            }
        } catch (PDOException $e) {
            // Manejo de errores de base de datos (puedes personalizar esto según tus necesidades).
            echo "Error en la consulta: " . $e->getMessage();
            return false;
        }
    }
}


