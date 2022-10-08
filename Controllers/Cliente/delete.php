<?php 
require_once('../../Models/Cliente.php');

if($_GET){
	echo $id=$_GET['id'];
		
		$modeloCliente=new cliente();
		$eliminar=$modeloCliente->delete($id);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/Cliente/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Cliente/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Cliente/delete.php'; </script>";
}

?>