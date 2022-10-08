<?php 	
require_once('../../Models/Producto.php');

if($_POST){
      $idProducto=$_POST['idProducto'];
      $nombreProducto=$_POST['nombreProducto'];
      $cantidadProducto=$_POST    ['cantidadProducto'];
      $fechaCaducidad=$_POST['fechaCaducidad'];
      $precioUnidad=$_POST['precioUnidad'];
      $descripcionProducto=$_POST['descripcionProducto'];
      $idCategoria_FK=$_POST['idCategoria_FK'];

		
    $modeloProducto=new producto();

    $actualizar=$modeloProducto->actualizar($idProducto, $nombreProducto, $cantidadProducto, $fechaCaducidad, $precioUnidad, $descripcionProducto, $idCategoria_FK);

		if($actualizar){
                  echo "<script> window.location='../../Views/templates/Producto/listAdm.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Producto/edit.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Producto/edit.php'; </script>";
}


?>