
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

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    <h1>Editar Usuario</h1>

    <form  method="POST" action="../../../Controllers/Usuario/edit.php" id="editar">
		<?php 
		if ($datosUsuario !=null) {
			foreach ($datosUsuario as $datos) {
	 ?>

	<label>Id :</label>
	<input type="text" name="idUsuario"  value="<?php echo $datos['idUsuario']?>"><br>

	<label>Nombre:</label>
	<input type="text" name="nombreUsuario" value="<?php echo $datos['nombreUsuario']?>"><br>

	<label>Correo:</label>
	<input type="email" name="correoUsuario" value="<?php echo $datos['correoUsuario']?>"><br>

	<label>Contraseña:</label>
	<input type="password" name="passworUsuario" value="<?php echo $datos['passworUsuario']?>"><br>

	<label>Rol:</label>
	<select name="rolUsuario" id="rol" checkdate="<?php echo $datos['rolUsuario']?>">
			<option value="ninguno">Seleccione un rol</option>
			<option <?php echo $datos['rolUsuario']==='Administrador' ? "selected='selected'":"" ?> value="Administrador">Administrador</option>
			<option <?php echo $datos['rolUsuario']==='Cajero' ? "selected='selected'":"" ?>  value="Cajero">Cajero</option>
			<option <?php echo $datos['rolUsuario']==='Cliente' ? "selected='selected'":"" ?>  value="Cliente">Cliente</option>
	</select><br>

	<?php 
	
			}
		}

 	?>
	</form>

	<input type="hidden" class="redirect" value="usuario">

	<button onclick="alertaEdit()">Actualizar</button>

	<script src="../../resources/js/formulario.js"></script>
    
</body>
</html>