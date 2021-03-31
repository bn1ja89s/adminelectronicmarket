<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=bmvmyg1enheoo5ku0wb0-mysql.services.clever-cloud.com;dbname=bmvmyg1enheoo5ku0wb0",
						"uzmn7ql6w4ek0dtn",
						"dOLC7aTtrTvJ1p6lJyAw",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}