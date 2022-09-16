<?php 
require_once('../../Models/Pedido.php');

if($_POST){
		$idPedido=$_POST['idPedido'];
		
		$modeloPedido=new pedido();
		$eliminar=$modeloPedido->delete($idPedido);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/Pedido/listAdm.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Pedido/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Pedido/delete.php'; </script>";
}

?>