<?php 
require_once('../../Models/TipoDoc.php');

if($_GET){
		$id=$_GET['id'];
		
		$modeloTipoDoc=new tipoDoc();
		$eliminar=$modeloTipoDoc->delete($id);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/TipoDoc/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/TipoDoc/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/TipoDoc/delete.php'; </script>";
}

?>