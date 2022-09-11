<?php 	
require_once('../../Models/Cajero.php');

if($_POST){
    $idCajero=$_POST['idCajero'];
    $nombreCajero=$_POST['nombreCajero'];
    $apellidoCajero=$_POST['apellidoCajero'];
    $direccionCajero=$_POST['direccionCajero'];
    $telefonoCajero=$_POST['telefonoCajero'];
    $numeroTipoDoc=$_POST['numeroTipoDoc'];
    $idTipoDoc_FK=$_POST['idTipoDoc_FK'];

		
    $modeloCajero=new cajero();

    $actualizar=$modeloCajero->actualizar($idCajero, $nombreCajero, $apellidoCajero, $direccionCajero, $telefonoCajero, $numeroTipoDoc, $idTipoDoc_FK);

		if($actualizar){
                  echo "<script> window.location='../../Views/templates/Cajero/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Cajero/edit.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Cajero/edit.php'; </script>";
}


?>