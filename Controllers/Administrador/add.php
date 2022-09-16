<?php 	
require_once('../../Models/Administrador.php');

if($_POST){
		$idAdministrador=$_POST['idAdministrador'];
		$nombreAdministrador=$_POST['nombreAdministrador'];
		$apellidoAdministrador=$_POST['apellidoAdministrador'];
		$telefonoAdministrador=$_POST['telefonoAdministrador'];
		$nitEmpresa=$_POST['nitEmpresa'];
		

		$modeloAdministrador=new administrador();
		$agregar=$modeloAdministrador->agregar($idAdministrador, $nombreAdministrador, $apellidoAdministrador, $telefonoAdministrador, $nitEmpresa);

		if($agregar){
		echo "<script> window.location='../../Views/templates/Administrador/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Administrador/add.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Administrador/add.php'; </script>";
}


?>