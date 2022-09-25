<?php 	
require_once('../../Models/Factura.php');

for ($i=0; $i < count($_POST) ; $i++){ 
	if($_POST){
			echo $idPedido_FK=$_POST['idPedido_FK'];
			echo $idProducto_FK=$_POST['idProducto_FK'];
			echo $cantidad=$_POST['cantidad'];
		

			$modeloFactura=new factura();
			$agregar=$modeloFactura->agregar($idPedido_FK, $idProducto_FK, $cantidad);

			if($agregar){
				echo "<script> window.location='../../Views/templates/Producto/listAdm.php'; </script>";
			}//else{
			// 	echo "<script> window.location='../../Views/templates/Factura/add.php'; </script>";
			// }
	}else{
		// echo "<script> window.location='../../Views/templates/Factura/add.php'; </script>";
	}

}


?>