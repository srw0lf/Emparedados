<?php 	
require_once('../../Models/Usuario.php');

if($_POST){
		$correoUsuario=$_POST['correoUsuario'];
		$contraseñaUsuario=$_POST['contraseñaUsuario'];
		
		
		$modeloUsuario=new usuario();
        $validar=$modeloUsuario->validar($correoUsuario, $contraseñaUsuario);

		if($validar){
			header('Location:../../Views/templates/index.php');
		}else{
			header('Location:../../Views/templates/Login.php');
		}
}else{
	header('Location:../../Views/templates/Login.php');
}


?>