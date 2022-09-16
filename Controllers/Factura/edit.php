<?php 	
require_once('../../Models/Factura.php');

if($_POST){
     $idPedido_FK=$_POST['idPedido_FK'];
     $idProducto_FK=$_POST['idProducto_FK'];
     $cantidad=$_POST['cantidad'];
     $total=$_POST['total'];


		
    $modeloFactura=new factura();

    $actualizar=$modeloFactura->actualizar($idPedido_FK, $idProducto_FK, $cantidad, $total);

		if($actualizar){
      echo "<script> window.location='../../Views/templates/Factura/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Factura/edit.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Factura/edit.php'; </script>";
}


?>