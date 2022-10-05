<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/6131ecdde6.js"></script>
	<title>Pedidos</title>
</head>
<body>
	<h1>Registrar Pedidos</h1>

	<?php
	for ($i=0; $i < 3; $i++) { 
	?>
		<form action="../../../Controllers/Pedido/add.php" method="POST" id="eliminar">
                <input type="hidden" name="idPedido">

                <?php date_default_timezone_set('America/Bogota');?>
				<?php $fecha=date('Y-m-d');?>
                <input type="hidden" name="fechaPedido" id="" value="<?php echo $fecha;?>">

                <label for="">Direccion Pedido</label>
                <input type="text" name="direccionPedido">

                <button type="submit"><i class="fa-solid fa-check"></i></button>
    </form>

	<form action="">
		
	</form>

	<button onclick="prueba()">Prueba</button>
	<?php
	}
	?>

	

	<script src="../../resources/js/formulario.js"></script>
</body>
</html>