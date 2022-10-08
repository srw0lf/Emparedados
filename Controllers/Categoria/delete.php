<?php 
require_once('../../Models/Categoria.php');

if($_GET){
	echo $id=$_GET['id'];
		
		$modeloCategoria=new categoria();
		$eliminar=$modeloCategoria->delete($id);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/Categoria/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Categoria/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Categoria/delete.php'; </script>";
}

?>