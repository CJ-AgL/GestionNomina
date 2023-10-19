<?php
class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=gestionnomina",
			            "root",
			            "452275");

		$link->exec("set names utf8");

		return $link;

	}

}		

	//$link = new PDO("mysql:host=server0751.hostilimitado.com;dbname=nominass_gestionnomina", "nominass_caguila", "y@q2wn7mcr4P");	