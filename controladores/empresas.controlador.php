<?php 


class ControladorEmpresas{

/*=============================================
	MOSTRAR EMPRESAS
	=============================================*/

	static public function ctrMostrarEmpresa($item, $valor){

		$tabla = "empresas";

		$respuesta = ModeloEmpresas::mdlMostrarEmpresa($tabla, $item, $valor);

		return $respuesta;

	}

}