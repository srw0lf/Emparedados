<?php 
require_once('../../Models/Cajero.php');

if($_POST){
		$idCajero=$_POST['idCajero'];
		
		$modeloCajero=new cajero();
		$eliminar=$modeloCajero->delete($idCajero);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/Cajero/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Cajero/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Cajero/delete.php'; </script>";
}

?>