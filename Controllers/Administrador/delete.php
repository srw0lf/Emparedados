<?php 
require_once('../../Models/Administrador.php');

if($_GET){
	echo $id=$_GET['id'];
	
	$modeloAdministrador=new administrador();
	$eliminar=$modeloAdministrador->delete($id);

	if($eliminar){
		echo "<script> window.location='../../Views/templates/Administrador/list.php'; </script>";
		// echo "<script> alert('Se eliminado su registro')</script>";
	}else{
		echo "<script> window.location='../../Views/templates/Administrador/delete.php'; </script>";
		// echo "<script> alert('No se ha podido eliminar su registro')</script>";
	}
}else{
	echo "<script> window.location='../../Views/templates/Administrador/delete.php'; </script>";
	// echo "<script> alert('No se ha podido eliminar su registro')</script>";
}

?>