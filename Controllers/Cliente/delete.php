<?php 
require_once('../../Models/Cliente.php');

if($_POST){
		$idCliente=$_POST['idCliente'];
		
		$modeloCliente=new cliente();
		$eliminar=$modeloCliente->delete($idCliente);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/Cliente/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Cliente/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Cliente/delete.php'; </script>";
}

?>