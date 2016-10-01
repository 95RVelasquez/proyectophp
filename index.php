<?php
//Gestionar las peticiones hacian el controlador cargando la vista

require 'controller/controller_users.php';
$lista=new ControllerUsuario();
$lista->Mostrar_Usuarios();


if (isset($_REQUEST['action']))
{
	if ($_REQUEST['action']=='grabar')
	{
		$lista->registrar_user();
	}elseif ($_REQUEST['action']=='update')
	{
		$lista->actualizar_user();
	}elseif ($_REQUEST['action']=='delete')
	{
		 $cod=$_GET['xcod'];
		$lista->Eliminar_User($cod);
	}
}