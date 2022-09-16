<?php 	
require_once('../../Models/Pedido.php');

if($_POST){
    $idPedido=$_POST['idPedido'];
    $fechaPedido=$_POST['fechaPedido'];
    $direccionPedido=$_POST['direccionPedido'];


		
    $modeloPedido=new pedido();

    $actualizar=$modeloPedido->actualizar($idPedido, $fechaPedido, $direccionPedido);

		if($actualizar){
      echo "<script> window.location='../../Views/templates/Pedido/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Pedido/edit.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Pedido/edit.php'; </script>";
}


?>