<?php 	
require_once('../../Models/Administrador.php');

if($_POST){
	$idAdministrador=$_POST['idAdministrador'];
	$nombreAdministrador=$_POST['nombreAdministrador'];
	$apellidoAdministrador=$_POST['apellidoAdministrador'];
	$telefonoAdministrador=$_POST['telefonoAdministrador'];
	$nitEmpresa=$_POST['nitEmpresa'];

		
$modeloAdministrador=new administrador();

$actualizar=$modeloAdministrador->actualizar($idAdministrador, $nombreAdministrador, $apellidoAdministrador, $telefonoAdministrador, $nitEmpresa);

		if($actualizar){
		echo "<script> window.location='../../Views/templates/Administrador/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Administrador/edit.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Administrador/edit.php'; </script>";
}


?>