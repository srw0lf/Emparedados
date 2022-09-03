<?php 
	require_once('../../../Models/Usuario.php');
	$modeloUsuario=new usuario();
	$id=$_GET['id'];
	$datosUsuario=$modeloUsuario->cosnsultarxid($id);
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

    <h1> Registro Usuario</h1>

    <form action="../../../Controllers/Usuario/edit.php" method="post">

    <?php 
		if ($datosUsuario !=null) {
			foreach ($datosUsuario as $datos) {
	 ?>

        <input type="text" name="idUsuario" id="id" value="<?php echo $datos['idUsuario']?>">

        <label for="name">Nombre(s):</label>
        <input type="text" name="nombreUsuario" id="nombre" value="<?php echo $datos['nombreUsuario']?>"><br>

        <label for="rol">Rol(s):</label>
        <input type="text" name="rolUsuario" id="rol" value="<?php echo $datos['rolUsuario']?>"><br>
         
        <label for="rol">Correo:</label>
        <input type="text" name="correoUsuario" id="correo" value="<?php echo $datos['correoUsuario']?>"><br>

        <label for="text">Contraseña:</label>
        <input type="text" name="contraseñaUsuario" id="contraseña" value="<?php echo $datos['contraseñaUsuario']?>"><br>

        <label for="texto">Estado:</label>

        <input type="radio" name="estadoUsuario" id="bt-estado " value="<?php echo $datos['estadoUsuario']?>">
        <label for="Activo">Activo</label>

        <input type="radio" name="estadoUsuario" id="bt-estado " value="<?php echo $datos['estadoUsuario']?>" >
        <label for="Inactivo">Inactivo</label> <br>

        <button type="submit" id="bt-enviar">Actualizar</button>

    	<?php 
	
			}
		}

 	?>
    </form>
</body>
</html>
