<?php 
require_once('../../../Models/Usuario.php');
$modeloUsuario=new usuario();

if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

$datosUsuario=$modeloUsuario->consultarxid($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuaruio prueba</title>
</head>
<body>

    <h1>Editar Usuario</h1>

    <form  method="POST" action="../../../Controllers/Usuario/edit.php">
		<?php 
		if ($datosUsuario !=null) {
			foreach ($datosUsuario as $datos) {
	 ?>

	<label>Id :</label>
	<input type="text" name="idUsuario" placeholder="ingrese su id" value="<?php echo $datos['idUsuario']?>"><br>

	<label>Nombre:</label>
	<input type="text" name="nombreUsuario" placeholder="digite su nombre"  value="<?php echo $datos['nombreUsuario']?>" minlegth="3" required  pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

	<label>Correo:</label>
	<input type="email" name="correoUsuario" placeholder="digite su correo" value="<?php echo $datos['correoUsuario']?>" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"><br>

	<label>Contraseña:</label><br>
	<input type="password" name="passworUsuario" placeholder="digite su contraseña" value="<?php echo $datos['passworUsuario']?>" minlength="8" required><br>

	<label>Rol:</label><br>
	<select name="rolUsuario" id="rol">
			<option value="ninguno">Seleccione un rol</option>
			<option value="Administrador">Administrador</option>
			<option value="Cajero">Cajero</option>
			<option value="Cliente">Cliente</option>
	</select><br>

	<label>Estado:</label><br>

	<input id="radio" type="radio" name="estadoUsuario" value="1"><b>Activo</b>
	<input id="radio" type="radio" name="estadoUsuario" value="0"><b>In-activo</b><br>

	<input id="boton" type="submit"value="Actualizar">

	<?php 
	
			}
		}

 	?>
</form>
    
</body>
</html>