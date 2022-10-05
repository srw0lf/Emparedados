<?php 
require_once('../../../Models/Usuario.php');
$modeloUsuario=new usuario();

if ($_GET) {
	$id=$_GET['id'];
    $rol=$_GET['rol'];
}

if ($rol='Administrador') {
    $datosUsuario=$modeloUsuario->verAdm($id);   
} elseif ($rol='Cliente') {
    $datosUsuario=$modeloUsuario->verCli($id);
} elseif ($rol='Cajero') {
    $datosUsuario=$modeloUsuario->verCaj($id);
}
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

    <h1>Ver Usuario</h1>
	<?php 
		if ($datosUsuario !=null) {
			foreach ($datosUsuario as $datos) {
	?>

	<label>Id :</label>
	<p><?php echo $datos['idUsuario']?></p><br>

	<label>Nombre:</label>
	<p><?php echo $datos['nombreUsuario']?></p><br>

	<label>Correo:</label>
	<p><?php echo $datos['correoUsuario']?></p><br>

	<label>Contraseña:</label>
	<p><?php echo $datos['passworUsuario']?></p><br>

	<label>Rol:</label>
    <p><?php echo $datos['rolUsuario']?></p><br>

    <label>Estado:</label>
    <p>
        <?php 
        if ($datos['estadoUsuario']==1) {
            echo 'activo';
        }elseif ($us['estadoUsuario']==0) {
            echo 'in-activo';
        }?>
    </p><br>
	

	<!-- <label>Estado:</label><br>

	<input id="radio" type="radio" name="estadoUsuario" value="1"><b>Activo</b>
	<input id="radio" type="radio" name="estadoUsuario" value="0"><b>In-activo</b><br> -->
	<?php 
	
			}
		}

 	?>
	</form>

	<button onclick="alertaEdit()">Actualizar</button>

<script src="../../resources/js/formulario.js"></script>
    
</body>
</html>