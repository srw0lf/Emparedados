<?php 
require_once('../../Models/TipoDoc.php');

if($_POST){
		$idTipoDoc=$_POST['idTipoDoc'];
		
		$modeloTipoDoc=new tipoDoc();
		$eliminar=$modeloTipoDoc->delete($idTipoDoc);

		if($eliminar){
			echo "<script> window.location='../../Views/templates/TipoDoc/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/TipoDoc/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/TipoDoc/delete.php'; </script>";
}

?>