<?php

class Conexion{

	public function conectar(){

		$link = new PDO("pgsql:host=localhost;dbname=cms","postgres","admin");
		return $link;

	}

}