<?php 	
require_once('../../Models/TipoDoc.php');

if($_POST){
    $idTipoDoc=$_POST['idTipoDoc'];
    $nombreTipoDoc=$_POST['nombreTipoDoc'];
    
    $modeloTipoDoc=new tipoDoc();

    $actualizar=$modeloTipoDoc->actualizar($idTipoDoc, $nombreTipoDoc);

		if($actualizar){
                  echo "<script> window.location='../../Views/templates/TipoDoc/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/TipoDoc/edit.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/TipoDoc/edit.php'; </script>";
}


?>