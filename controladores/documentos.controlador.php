<?php

	class ControladorDocumentos{

		/*=============================================
		    CARGAR  DOCUMENTOS
		 =============================================*/
		static public function ctrAgregarDocumentos() {





		}

    	/*=============================================
		    MOSTRAR  DOCUMENTOS
		 =============================================*/

		 static public function ctrMostrarDocumentos($item, $valor){

        $tabla = "documentos";

        $respuesta = ModeloDocumentos::mdlMostrarDocuementos($tabla, $item, $valor);

        return $respuesta;

    }

	}