<?php

/*=========================================
   			 CONTROLADORES
  ========================================*/

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/empleados.controlador.php"; 
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/empresas.controlador.php";
require_once "controladores/documentos.controlador.php";
require_once "controladores/historialLaboral.controlador.php";
require_once "controladores/anticipos.controlador.php";
require_once "controladores/ausencias.controlador.php";
require_once "controladores/hrsExtras.controlador.php";

/*=========================================
   			 MODELOS
  ========================================*/

require_once "modelos/usuarios.modelo.php";
require_once "modelos/empleados.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/empresas.modelo.php";
require_once "modelos/documentos.modelo.php";
require_once "modelos/historialLaboral.modelo.php";
require_once "modelos/anticipos.modelo.php";
require_once "modelos/ausencias.modelo.php";
require_once "modelos/hrsExtras.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
