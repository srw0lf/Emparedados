<?php 
require_once('../../Models/Producto.php');

if($_POST){
		$idProducto=$_POST['idProducto'];
		
		$modeloProducto=new producto();
		$eliminar=$modeloProducto->delete($idProducto);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/Producto/listAdm.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Producto/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Producto/delete.php'; </script>";
}

?>