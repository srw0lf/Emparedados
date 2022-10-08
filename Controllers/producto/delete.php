<?php 
require_once('../../Models/Producto.php');

if($_GET){
	echo $id=$_GET['id'];
		
		$modeloProducto=new producto();
		$eliminar=$modeloProducto->delete($id);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/Producto/listAdm.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Producto/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Producto/delete.php'; </script>";
}

?>