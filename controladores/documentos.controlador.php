<?php

		class ControladorDocumentos {

	
    	/*=============================================
		    MOSTRAR  DOCUMENTOS
		 =============================================*/

   		public static function ctrMostrarDocumentosPorEmpleado($item, $valor) {
        
        $tabla = "documentos"; // Reemplaza con el nombre de tu tabla de documentos
        $respuesta = ModeloDocumentos::mdlMostrarDocumentosPorEmpleado($tabla, $item, $valor);
        
        // Verifica si $respuesta es null y, si lo es, devuelve un arreglo vacío
        return ($respuesta != null) ? $respuesta : array();
    }

    public static function mostrarContenidoPDFPorID()
    {
        if (isset($_GET['idDocumento'])) {
            $idDocumento = $_GET['idDocumento'];

            // Obtén el contenido del PDF por ID utilizando el modelo
            $contenidoPDF = ModeloDocumentos::obtenerContenidoPDFPorID($idDocumento);

            if ($contenidoPDF !== false) {
                // Establece los encabezados para el PDF.
                header('Content-Type: application/pdf');
                header('Content-Disposition: inline; filename="documento.pdf"'); // Cambia el nombre del archivo según sea necesario.

                // Imprime el contenido del PDF.
                echo $contenidoPDF;
                exit; // Importante: detén la ejecución del script después de enviar el PDF.
            } else {
                echo "El PDF no se pudo cargar.";
            }
        } else {
            echo "ID de documento no especificado.";
        }
    }
}