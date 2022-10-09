
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
    <title>Emparedados</title>

	<link rel="stylesheet" href="../../resources/css/sweet.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <!-- Links paginacion data table -->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 

   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.css">
   
   <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.js"></script>
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

   <script src="https://kit.fontawesome.com/bcbd8b5d8b.js" crossorigin="anonymous"></script>

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