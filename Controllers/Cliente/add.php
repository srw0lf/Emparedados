<?php 	
require_once('../../Models/Cliente.php');

if($_POST){
		$idCliente=$_POST['idCliente'];
		$nombreCliente=$_POST['nombreCliente'];
		$apellidoCliente=$_POST['apellidoCliente'];
        $direccionCliente=$_POST['direccionCliente'];
		$telefonoCliente=$_POST['telefonoCliente'];

		$modeloCliente=new cliente();
		$agregar=$modeloCliente->agregar($idCliente, $nombreCliente, $apellidoCliente, $direccionCliente, $telefonoCliente);

		if($agregar){
		    echo "<script> window.location='../../Views/templates/Cliente/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/templates/Cliente/add.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/templates/Cliente/add.php'; </script>";
}


?>