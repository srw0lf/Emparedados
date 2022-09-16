<?php 
	require_once('../../../Models/Producto.php');
	$modeloProducto=new producto();
	$id=$_GET['id'];
	$datosProducto=$modeloProducto->cosnsultarxid($id);

    require_once('../../../Models/Categoria.php');
    $modeloCategoria=new categoria();

?>
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

    <h1>Editar Producto</h1>

    <form action="../../../Controllers/Producto/edit.php" method="post">

    <?php 
		if ($datosProducto !=null) {
			foreach ($datosProducto as $datos) {
	 ?>

        <input type="hidden" name="idProducto" id="id" value="<?php echo $datos['idProducto']?>">

        <label for="name">Nombre del producto:</label>
        <input type="text" name="nombreProducto" id="nombre" value="<?php echo $datos['nombreProducto']?>" minlength="3" required  pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

        <label for="cantidad">Cantidad disponible:</label>
        <input type="number" name="cantidadProducto" id="cantidad" value="<?php echo $datos['cantidadProducto']?>" required><br>

        <label for="date">Fecha de caducidad:</label>
        <input type="date" name="fechaCaducidad" id="fecha" value="<?php echo $datos['fechaCaducidad']?>"required><br>

        <label for="number">Precio (por unidad):</label>
        <input type="number" name="precioUnidad" id="precio" value="<?php echo $datos['precioUnidad']?>" required><br>

        <label for="txt">Descripcion del producto</label>
        <input type="text" name="descripcionProducto" id="descripcion" value="<?php echo $datos['descripcionProducto']?>" required  pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

        <label for="">Categoria:</label>
        <select name="idCategoria_FK" id="categoria">
            <option value="<?php echo $datos['idCategoria_FK'];?>">Seleccione una categoria</option>

            <?php $categoria=$modeloCategoria->consultar(); 
            if ($categoria!=null) {
                foreach($categoria as $ct){
            ?>
            <option value="<?php echo $ct['idCategoria'];?>"><?php echo $ct['nombreCategoria'];?></option>
            <?php 
                }
            }
            ?>

        </select><br>

        <label for="txt">Estado del producto</label>
        
        <input type="hidden" name="estadoProducto" id="id" value="<?php echo $datos['estadoProducto']?>">

        <input type="radio" name="estadoProducto" id="estado" value="1">activo

        <input type="radio" name="estadoProducto" id="estado" value="0">in-activo

        <button type="submit" name="bt-enviar" id="bt-enviar">Actualizar</button>

    	<?php 
	
			}
		}

 	?>
    </form>
</body>
</html>