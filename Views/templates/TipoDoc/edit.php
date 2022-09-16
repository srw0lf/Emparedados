<?php 
	require_once('../../../Models/TipoDoc.php');
	$modeloTipoDoc=new tipoDoc();
	$id=$_GET['id'];
	$datosTipoDoc=$modeloTipoDoc->cosnsultarxid($id);
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

    <form action="../../../Controllers/TipoDoc/edit.php" method="post">

    <?php 
		if ($datosTipoDoc !=null) {
			foreach ($datosTipoDoc as $datos) {
	 ?>

        <input type="hidden" name="idTipoDoc" id="id" value="<?php echo $datos['idTipoDoc']?>">

        <label for="name">Nombre:</label>
        <input type="text" name="nombreTipoDoc" id="nombre" value="<?php echo $datos['nombreTipoDoc']?>" minlength="3" required  pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

        <button type="submit" name="bt-enviar" id="bt-enviar">Actualizar</button>

    	<?php 
	
			}
		}

 	?>
    </form>
</body>
</html>