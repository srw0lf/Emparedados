<?php 	
require_once('../../Models/Categoria.php');

if($_POST){
    $idCategoria=$_POST['idCategoria'];
    $nombreCategoria=$_POST['nombreCategoria'];
    $descripcion=$_POST['descripcion'];
    
    $modeloCategoria=new categoria();

    $actualizar=$modeloCategoria->actualizar($idCategoria, $nombreCategoria, $descripcion);

		if($actualizar){
                  echo "<script> window.location='../../Views/templates/Categoria/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Categoria/edit.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Categoria/edit.php'; </script>";
}


?>