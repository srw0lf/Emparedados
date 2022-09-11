<?php 	
require_once('../../Models/TipoDoc.php');

if($_POST){
		$idTipoDoc=$_POST['idTipoDoc'];
		$nombreTipoDoc=$_POST['nombreTipoDoc'];
		
		$modeloTipoDoc=new tipoDoc();
		$agregar=$modeloTipoDoc->agregar($idTipoDoc, $nombreTipoDoc);

		if($agregar){
		    echo "<script> window.location='../../Views/templates/TipoDoc/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/TipoDoc/add.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/TipoDoc/add.php'; </script>";
}


?>