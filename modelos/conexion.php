<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=b0uyo3geqznpiyuiita1-mysql.services.clever-cloud.com;dbname=b0uyo3geqznpiyuiita1",
						"u8kzgumbdvp8mng6",
						"gOf6m9SUqVMgAmSk606X",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}