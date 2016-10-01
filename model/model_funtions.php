<?php
//funciones haciendo uso de procedimientos
require 'model/model_conexion.php';
class Model_Usuarios extends Conexion{
	private $result;
	private $query;
	
	//creamos el metodo listar clientes 
	public function listar_users()
	{
		$this->result=$this->connect->prepare("call sp_list_user");
		$this->result->execute();
		$this->connect=null;
		return $this->result;
	}
	
	public function insetar_user($cod,$nom,$user,$pass,$mail,$tipo)
	{
		$this->result=$this->connect->prepare("call sp_registrar_user(?,?,?,?,?,?)");
		$this->result->bindParam(1,$cod,PDO::PARAM_INT);
		$this->result->bindParam(2,$nom,PDO::PARAM_STR);
		$this->result->bindParam(3,$user,PDO::PARAM_STR);
		$this->result->bindParam(4,$pass,PDO::PARAM_STR);
		$this->result->bindParam(5,$mail,PDO::PARAM_STR);
		$this->result->bindParam(6,$tipo,PDO::PARAM_INT);
		$this->result->execute();
		$this->connect=null;
		
		
		
	}
	
  public function actualizar_user($cod,$nom,$user,$pass,$mail,$tipo)
	{
		$this->result=$this->connect->prepare("call sp_actualizar_user(?,?,?,?,?,?)");
		$this->result->bindParam(1,$cod,PDO::PARAM_INT);
		$this->result->bindParam(2,$nom,PDO::PARAM_STR);
		$this->result->bindParam(3,$user,PDO::PARAM_STR);
		$this->result->bindParam(4,$pass,PDO::PARAM_STR);
		$this->result->bindParam(5,$mail,PDO::PARAM_STR);
		$this->result->bindParam(6,$tipo,PDO::PARAM_INT);
		$this->result->execute();
		$this->connect=null;		
		
	}
	
	public function eliminar_user($cod)
	{
		$this->result=$this->connect->prepare("call sp_eliminar_user(?)");
		$this->result-> bindParam(1,$cod,PDO::PARAM_INT);
		$this->result->execute();
		$this->connect=null;
		
	}
   
}