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

    <link rel="stylesheet" type="text/css" href="../../resources/css/sweet.css">

	<!-- Links paginacion data table -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.css">
	
	<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.js"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<script src="https://kit.fontawesome.com/bcbd8b5d8b.js" crossorigin="anonymous"></script>
</head>
<body>

    <h1>Editar Cliente</h1>

    <form action="../../../Controllers/Cliente/edit.php" method="post" id="editar">

    <?php 
		if ($datosCliente !=null) {
			foreach ($datosCliente as $datos) {
	 ?>

        <input type="hidden" name="idCliente" id="id" value="<?php echo $datos['idCliente']?>"><br>

        <label for="name">Nombre(s):</label>
        <input type="text" name="nombreCliente" id="nombre" value="<?php echo $datos['nombreCliente']?>"><br>

        <label for="apellido">Apellido(s):</label>
        <input type="text" name="apellidoCliente" id="apellido" value="<?php echo $datos['apellidoCliente']?>"><br>

        <label for="adress">Dirección:</label>
        <input type="text" name="direccionCliente" id="direccion" value="<?php echo $datos['direccionCliente']?>"><br>

        <label for="number">Telefono/ número celular:</label>
        <input type="number" name="telefonoCliente" id="telefono" value="<?php echo $datos['telefonoCliente']?>"><br>

        <!-- <button type="submit" name="bt-enviar" id="bt-enviar">Actualizar</button> -->

    	<?php 
	
			}
		}

 	?>
    </form>

    <input type="hidden"  class="redirect" value="Cliente">

    <button onclick="alertaEdit()">Actualizar</button>

    <script src="../../resources/js/formulario.js"></script>
</body>
</html>