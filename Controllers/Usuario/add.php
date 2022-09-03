<?php 	
require_once('../../Models/Usuario.php');

if($_POST){
		$idUsuario=$_POST['idUsuario'];
		$nombreUsuario=$_POST['nombreUsuario'];
		$rolUsuario=$_POST['rolUsuario'];
        $correoUsuario=$_POST['correoUsuario'];
		$contraseñaUsuario=$_POST['contraseñaUsuario'];
        $estadoUsuario=$_POST['estadoUsuario'];

		$modeloCajero=new usuario();
		$agregar=$modeloCajero->agregar($idUsuario, $nombreUsuario, $rolUsuario, $correoUsuario,$contraseñaUsuario, $estadoUsuario);

		if($agregar){
		    echo "<script> window.location='../../Views/templates/Usuario/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Usuario/add.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Usuario/add.php'; </script>";
}


?>