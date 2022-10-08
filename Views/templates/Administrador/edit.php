<?php 
	require_once('../../../Models/Administrador.php');
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
    <title>Emparedados</title>

    <link rel="stylesheet" type="text/css" href="../../resources/css/sweet.css">

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

    <h1>Actualizar Administrador</h1>

    <form  method="POST" action="../../../Controllers/Administrador/edit.php" id="editar">
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

        <!-- <input id="boton" type="submit"value="Actualizar"> -->

	<?php 
	
			}
		}

 	?>
    </form>
    
    <input type="hidden"  class="redirect" value="Administrador">

    <button onclick="alertaEdit()">Actualizar</button>

    <script src="../../resources/js/formulario.js"></script>
</body>
</html>