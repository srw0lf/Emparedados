<?php 
require_once('../../Models/Administrador.php');

if($_POST){
		$idAdministrador=$_POST['idAdministrador'];
		
		$modeloAdministrador=new administrador();
		$eliminar=$modeloAdministrador->delete($idAdministrador);

		if($eliminar){
		echo "<script> window.location='../../Views/templates/Administrador/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Administrador/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Administrador/delete.php'; </script>";
}

?>