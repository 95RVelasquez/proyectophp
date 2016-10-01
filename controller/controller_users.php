<?php
//controladores de la entindad users
require 'model/model_funtions.php';
class ControllerUsuario
{
	 private $model;
	 private $result;
	
	public function Mostrar_Usuarios()
	{
	   $this->model=new Model_Usuarios();
	   $this->result=$this->model->listar_users();
	   $datos=$this->result;
	   include 'view/users_list.php';
	}
	public function registrar_user()
	{
		$cod=null;
	    $nom=$_POST['nom'];
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$mail=$_POST['mail'];
		$tipo=$_POST['tipo'];
		$this->model=new Model_Usuarios();
		$this->result=$this->model->insetar_user($cod, $nom, $user, $pass, $mail, $tipo);
		include 'view/registrar_user.php';
		header('location:index.php');
		
	}
    public function actualizar_user()
	{
		$cod=$_POST['cod'];
	    $nom=$_POST['nom'];
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$mail=$_POST['mail'];
		$tipo=$_POST['tipo'];
		$this->model=new Model_Usuarios();
		$this->result=$this->model->actualizar_user($cod, $nom, $user, $pass, $mail, $tipo);
		include 'view/actualizar_user.php';
		header('location:index.php');
		
	}
	public function Eliminar_User($xcod)
	{
		$this->model=new Model_Usuarios();
		$this->result=$this->model->eliminar_user($xcod);
		include 'index.php';
		header('location:index.php');
		
	}
}