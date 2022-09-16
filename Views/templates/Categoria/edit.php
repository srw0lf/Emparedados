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
</head>
<body>

    <h1>Editar tipo de documento</h1>

    <form action="../../../Controllers/Categoria/edit.php" method="post">

        <?php 
		    if ($datosCategoria !=null) {
			    foreach ($datosCategoria as $datos) {
	    ?>

        <input type="hidden" name="idCategoria" id="id" value="<?php echo $datos['idCategoria']?>"><br>

        <label for="name">Nombre:</label>
        <input type="text" name="nombreCategoria" id="nombre" value="<?php echo $datos['nombreCategoria']?>"><br>

        <label for="name">Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion" value="<?php echo $datos['descripcion']?>"><br>

        <button type="submit" name="bt-enviar" id="bt-enviar">Actualizar</button>

    	<?php 
	
			}
		}

 	?>
    </form>
</body>
</html>