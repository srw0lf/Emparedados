<?php 
require_once('../../Models/Cajero.php');

if($_GET){
		echo $id=$_GET['id'];
		
		$modeloCajero=new cajero();
		$eliminar=$modeloCajero->delete($id);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/Cajero/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Cajero/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Cajero/delete.php'; </script>";
}

?>