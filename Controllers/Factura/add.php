<?php 	
require_once('../../Models/Factura.php');

require_once('../../Models/Pedido.php');

if($_POST){
	echo $idPedido=$_POST['idPedido'];
	$fechaPedido=$_POST['fechaPedido'];
	$direccionPedido=$_POST['direccionPedido'];


// 	$modeloPedido=new pedido();
// 	$agregarPedido=$modeloPedido->agregarPedido($idPedido, $fechaPedido, $direccionPedido);
 }


	if($_POST){

		$arreglo=array(1,2);

			var_dump ($idPedido_FK=$_POST['idPedido']);
			echo $idProducto_FK=$_POST['idProducto_FK'] . ' La variable es id <br>';
			echo $cantidad=$_POST['cantidad'] . ' La variable es cantidad <br>';
		
		for ($i=0; $i < 3 ; $i++){ 

			// var_dump ($idProducto_FK);
			// $modeloFactura=new factura();
			// $agregar=$modeloFactura->agregar($idPedido_FK, $idProducto_FK, $cantidad);
		
		}

			// if($agregar){
			// 	echo "<script> window.location='../../Views/templates/Producto/listAdm.php'; </script>";
			// }else{
			// 	echo "<script> window.location='../../Views/templates/Factura/add.php'; </script>";
			// }
	}//else{
	// 	echo "<script> window.location='../../Views/templates/Factura/add.php'; </script>";
	// }


?>