<?php 
	require_once('../../../Models/Cliente.php');
	$modeloCliente=new cliente();
	$id=$_GET['id'];
	$datosCliente=$modeloCliente->cosnsultarxid($id);

    // require_once('../../../Models/Cliente.php');
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

    <h1>Editar Cliente</h1>

    <form action="../../../Controllers/Cliente/edit.php" method="post">

    <?php 
		if ($datosCliente !=null) {
			foreach ($datosCliente as $datos) {
	 ?>

        <input type="hidden" name="idCliente" id="id" value="<?php echo $datos['idCliente']?>"><br>

        <label for="name">Nombre(s):</label>
        <input type="text" name="nombreCliente" id="nombre" value="<?php echo $datos['nombreCliente']?>" minlength="3" required  pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

        <label for="apellido">Apellido(s):</label>
        <input type="text" name="apellidoCliente" id="apellido" value="<?php echo $datos['apellidoCliente']?>" minlength="3" required  pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

        <label for="adress">Dirección:</label>
        <input type="text" name="direccionCliente" id="direccion" value="<?php echo $datos['direccionCliente']?>" required><br>

        <label for="number">Telefono/ número celular:</label>
        <input type="number" name="telefonoCliente" id="telefono" value="<?php echo $datos['telefonoCliente']?>" required><br>

        <button type="submit" name="bt-enviar" id="bt-enviar">Actualizar</button>

    	<?php 
	
			}
		}

 	?>
    </form>
</body>
</html>