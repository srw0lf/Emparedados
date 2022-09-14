<?php 
	require_once('../../../Models/Administrador.php');
	$modeloAdministrador=new administrador();
	$id=$_GET['id'];
	$datosAdministrador=$modeloAdministrador->cosnsultarxid($id);

    //require_once('../../../Models/Usuario.php');
   // $modeloUsuario=new usuario();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emparedados</title>
</head>
<body>

    <h1>Registrar Administrador</h1>

    <form action="../../../Controllers/Administrador/edit.php" method="post">

    <?php 
		if ($datosAdministrador !=null) {
			foreach ($datosAdministrador as $datos) {
	 ?>

        <input type="hidden" name="idAdministrador" id="id" value="<?php echo $datos['idAdministrador']?>">

        <label for="name">Nombre(s):</label>
        <input type="text" name="nombreAdministrador" id="nombre" value="<?php echo $datos['nombreAdministrador']?>"><br>

        <label for="apellido">Apellido(s):</label>
        <input type="text" name="apellidoAdministrador" id="apellido" value="<?php echo $datos['apellidoAdministrador']?>"><br>

        <label for="number">Telefono/ número celular:</label>
        <input type="number" name="telefonoAdministrador" id="telefono" value="<?php echo $datos['telefonoAdministrador']?>"><br><br>

        <label for="number">Nit De Empresa:</label>
        <input type="number" name="nitEmpresa" id="nit" value="<?php echo $datos['nitEmpresa']?>"><br>

    

        <button type="submit" name="bt-enviar" id="bt-enviar">Actualizar</button>

    	<?php 
	
			}
		}

 	?>
    </form>
</body>
</html>