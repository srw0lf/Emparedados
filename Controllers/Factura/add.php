<?php 	
require_once('../../Models/Factura.php');

require_once('../../Models/Pedido.php');

if($_POST){
	$idPedido=$_POST['idPedido'];
	$fechaPedido=$_POST['fechaPedido'];
	$direccionPedido=$_POST['direccionPedido'];

 	$modeloPedido=new pedido();
 	$agregarPedido=$modeloPedido->agregarPedido($idPedido, $fechaPedido, $direccionPedido);
 }


	if($_POST){

			$idPedido_FK=$_POST['idPedido'];
			$idProducto_FK=$_POST['idProducto_FK'];
			$cantidad=$_POST['cantidad'];
		
		for ($i=0; $i < sizeof ($idProducto_FK) ; $i++){ 

			 $modeloFactura=new factura();
			 $agregar=$modeloFactura->agregar($idPedido_FK, $idProducto_FK[$i], $cantidad[$i]);
		
		}

			if($agregar){
				echo "<script> alert('Tu pedido llegara con proximidad'); </script>";
			 	echo "<script> window.location='../../Views/templates/Producto/list.php'; </script>";
			}else{
				echo "<script> alert('Lo sentimos tu pedido no ha sido fichado'); </script>";
		 		echo "<script> window.location='../../Views/templates/Factura/add.php'; </script>";
			}
	}else{
		echo "<script> window.location='../../Views/templates/Factura/add.php'; </script>";
	}


?>