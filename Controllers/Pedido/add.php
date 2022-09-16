<?php 	
require_once('../../Models/Pedido.php');

if($_POST){
		$idPedido=$_POST['idPedido'];
		$fechaPedido=$_POST['fechaPedido'];
		$direccionPedido=$_POST['direccionPedido'];
	

		$modeloPedido=new pedido();
		$agregar=$modeloPedido->agregar($idPedido, $fechaPedido, $direccionPedido);

		if($agregar){
		    echo "<script> window.location='../../Views/templates/Producto/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Producto/list.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Producto/list.php'; </script>";
}


?>