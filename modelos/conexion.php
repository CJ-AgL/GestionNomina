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