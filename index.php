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


/*=========================================
   			 MODELOS
  ========================================*/

require_once "modelos/usuarios.modelo.php";
require_once "modelos/empleados.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/empresas.modelo.php";
require_once "modelos/documentos.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
