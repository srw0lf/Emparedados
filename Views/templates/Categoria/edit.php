<?php 
	require_once('../../../Models/Categoria.php');
	$modeloCategoria=new categoria();
	$id=$_GET['id'];
	$datosCategoria=$modeloCategoria->cosnsultarxid($id);
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

    <h1>Editar tipo de documento</h1>

    <form action="../../../Controllers/Categoria/edit.php" method="post" id="editar">

        <?php 
		    if ($datosCategoria !=null) {
			    foreach ($datosCategoria as $datos) {
	    ?>

        <input type="hidden" name="idCategoria" id="id" value="<?php echo $datos['idCategoria']?>"><br>

        <label for="name">Nombre:</label>
        <input type="text" name="nombreCategoria" id="nombre" value="<?php echo $datos['nombreCategoria']?>"><br>

        <label for="name">Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion" value="<?php echo $datos['descripcion']?>"><br>

        <!-- <button type="submit" name="bt-enviar" id="bt-enviar">Actualizar</button> -->

    	<?php 
	
			}
		}

 	?>
    </form>

    <input type="hidden" class="redirect" value="Categoria">

    <button onclick="aletaEdit()">Actualizar</button>

    <script src="../../resources/js/formulario.js"></script>
</body>
</html>