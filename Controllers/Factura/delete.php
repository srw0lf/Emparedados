<?php 
require_once('../../Models/Factura.php');

if($_POST){
		$idPedido_FK=$_POST['idPedido_FK'];
		$idProducto_FK=$_POST['idProducto_FK'];
		
		$modeloFactura=new factura();
		$eliminar=$modeloFactura->delete($idPedido_FK, $idProducto_FK);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/Factura/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Factura/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Factura/delete.php'; </script>";
}

?>