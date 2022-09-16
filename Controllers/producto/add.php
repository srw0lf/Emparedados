<?php 	
require_once('../../Models/Producto.php');

if($_POST){
		$idProducto=$_POST['idProducto'];
		$nombreProducto=$_POST['nombreProducto'];
		$cantidadProducto=$_POST['cantidadProducto'];
        $fechaCaducidad=$_POST['fechaCaducidad'];
		$precioUnidad=$_POST['precioUnidad'];
        $descripcionProducto=$_POST['descripcionProducto'];
		$estadoProducto=$_POST['estadoProducto'];
		$idCategoria_FK=$_POST['idCategoria_FK'];

		$modeloProducto=new producto();
		$agregar=$modeloProducto->agregar($idProducto, $nombreProducto, $cantidadProducto, $fechaCaducidad, $precioUnidad, $descripcionProducto, $estadoProducto, $idCategoria_FK);

		if($agregar){
		    echo "<script> window.location='../../Views/templates/Producto/listAdm.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Producto/add.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Producto/add.php'; </script>";
}


?>