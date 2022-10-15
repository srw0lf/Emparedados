<?php 	
require_once('../../Models/Factura.php');
$modeloFactura=new factura();

require_once('../../Models/Pedido.php');

if($_POST){
	$fechaPedido=$_POST['fechaPedido'];
	$direccionPedido=$_POST['direccionPedido'];

 	$modeloPedido=new pedido();
 	$agregarPedido=$modeloPedido->agregarPedido($fechaPedido, $direccionPedido);
 }


	if($_POST){
			$idProducto_FK=$_POST['idProducto_FK'];
			$cantidad=$_POST['cantidad'];
		
		for ($i=0; $i < sizeof ($idProducto_FK) ; $i++){

			$datosFactura=$modeloFactura->validarStock($idProducto_FK[$i]);

			if ($datosFactura !=null) {
				foreach ($datosFactura as $datos) {
					echo $validar=$datos['cantidadProducto'];

					if ($cantidad[$i]<$validar) {
						$agregar=$modeloFactura->agregar($idProducto_FK[$i], $cantidad[$i]);
    					$actualizarTot=$modeloFactura->actualizarTot();
					}else{
						echo "<script>alert('En una  o mas ordenes, la cantidad solitada ecxede las existencias disponibles, por lo cual solo se tomara en cuenta aquellas ordenes que no excedan la cantidad de existencias.')</script>";
					}
				}
			}
            
				// $modeloFactura=new factura();
				// $agregar=$modeloFactura->agregar($idProducto_FK[$i], $cantidad[$i]);
    			// $actualizarTot=$modeloFactura->actualizarTot();

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