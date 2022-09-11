<?php 	
require_once('../../Models/Categoria.php');

if($_POST){
		$idCategoria=$_POST['idCategoria'];
		$nombreCategoria=$_POST['nombreCategoria'];
		$descripcion=$_POST['descripcion'];
		
		$modeloCategoria=new categoria();
		$agregar=$modeloCategoria->agregar($idCategoria, $nombreCategoria, $descripcion);

		if($agregar){
		    echo "<script> window.location='../../Views/templates/Categoria/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Categoria/add.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Categoria/add.php'; </script>";
}


?>