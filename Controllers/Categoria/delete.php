<?php 
require_once('../../Models/Categoria.php');

if($_POST){
		$idCategoria=$_POST['idCategoria'];
		
		$modeloCategoria=new categoria();
		$eliminar=$modeloCategoria->delete($idCategoria);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/Categoria/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Categoria/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Categoria/delete.php'; </script>";
}

?>