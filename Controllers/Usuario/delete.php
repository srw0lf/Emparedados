<?php 
require_once('../../Models/Usuario.php');

if($_POST){
		$idUsuario=$_POST['idUsuario'];
		
		$modeloUsuario=new usuario();
		$eliminar=$modeloUsuario->delete($idUsuario);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/Usuario/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Usuario/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Usuario/delete.php'; </script>";
}

?>