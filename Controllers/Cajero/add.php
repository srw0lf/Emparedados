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
		$agregar=$modeloCajero->agregar($idCajero, $nombreCajero, $apellidoCajero, $direccionCajero, $telefonoCajero, $numeroTipoDoc, $idTipoDoc_FK);

		if($agregar){
		    echo "<script> window.location='../../Views/templates/Cajero/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Cajero/add.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Cajero/add.php'; </script>";
}


?>