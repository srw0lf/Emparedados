<?php 	
require_once('../../Models/Factura.php');

if($_POST){
		$idPedido=$_POST['idPedido'];
		$idProducto=$_POST['idProducto'];
		$cantidad=$_POST['cantidad'];
	

		$modeloFactura=new factura();
		$agregar=$modeloFactura->agregar($idPedido, $idProducto, $cantidad);

		if($agregar){
		    echo "<script> window.location='../../Views/templates/Producto/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Producto/add.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Producto/add.php'; </script>";
}


?>