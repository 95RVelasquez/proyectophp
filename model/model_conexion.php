<?php
//cadena de conexion y metodos abstractos que seran heredados por clase
require 'model/config.php';
abstract class Conexion extends Config
{
	public function __construct()
	{
		try {
			//realizamos la conexion PDO
			 $this->connect=new PDO('mysql:host='.self::host.';dbname='.self::bd,self::user,self::pass);
			 ##echo "Conexion con exito";
		} catch (PDOException $e) {
			//obtenemos errores de conexion pdo
			
			echo "Error en la conexion ".$e->getMessage();
		}
	}
}