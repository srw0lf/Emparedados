<?php 	
require_once('../../Models/Producto.php');

if($_POST){
		$id=$_POST['id'];
		$estado=$_POST['estado'];
		

		$modeloProducto=new producto();
		$dinamic=$modeloProducto->dinamic($id, $estado);

		if($dinamic){
			header('Location:../../Views/templates/Producto/listAdm.php');
		}else{
			// header('Location:../../Views/templates/Usuario/add.php');
		}
}else{
	// header('Location:../../Views/templates/Usuario/add.php');
}