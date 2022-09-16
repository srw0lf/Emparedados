<?php 	
require_once('../../Models/Usuario.php');

if($_POST){
		$idUsuario=$_POST['idUsuario'];
		$nombreUsuario=$_POST['nombreUsuario'];
		$correoUsuario=$_POST['correoUsuario'];
		$passworUsuario=$_POST['passworUsuario'];
		$rolUsuario=$_POST['rolUsuario'];
		$estadoUsuario=$_POST['estadoUsuario'];

		$modeloUsuario=new usuario();
		$agregar=$modeloUsuario->agregar($idUsuario, $nombreUsuario, $correoUsuario, $passworUsuario, $rolUsuario, $estadoUsuario);

		if($agregar){
			header('Location:../../Views/templates/Usuario/list.php');
		}else{
			header('Location:../../Views/templates/Usuario/add.php');
		}
}else{
	header('Location:../../Views/templates/Usuario/add.php');
}


?>