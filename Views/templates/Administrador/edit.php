<?php 
	require_once('../../Models/Administrador.php');
	$modeloAdministrador=new administrador();
	$id=$_GET['id'];
	$datosAdministrador=$modeloAdministrador->cosnsultarxid($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST" action="../../../Controllers/Administrador/edit.php">
	<?php 
		if ($datosAdministrador !=null) {
			foreach ($datosAdministrador as $datos) {
	?>

        <label>Id</label>
        <input  type="text" name="idAdministrador"  value="<?php echo $datos['idAdministrador']?>"><br>

        <label>Nombre</label>
        <input type="text" name="nombreAdministrador" value="<?php echo $datos['nombreAdministrador']?>"><br>

        <label>Apellido</label>
        <input  type="text" name="apellidoAdministrador" placeholder="ingrese su apellido" value="<?php echo $datos['apellidoAdministrador']?>"><br>

        <label>Telefono</label>
        <input  type="text" name="telefonoAdministrador" value="<?php echo $datos['telefonoAdministrador']?>"><br> 

        <label>Nit</label>
        <input  type="text" name="nitEmpresa" value="<?php echo $datos['nitEmpresa']?>"><br>

        <input id="boton" type="submit"value="Actualizar">

	<?php 
	
			}
		}

 	?>
    </form>
</body>
</html>