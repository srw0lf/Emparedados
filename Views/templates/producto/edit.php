<?php 
	require_once('../../../Models/Producto.php');
	$modeloProduto=new producto();
	$id=$_GET['id'];
	$datosProducto=$modeloProduto->consultarxid($id);

    require_once('../../../Models/Categoria.php');
    $modeloCategoria=new categoria();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emparedados</title>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <h1>Editar Producto</h1>

    <form action="../../../Controllers/Producto/edit.php" method="post" id="editar">

    <?php 
		if ($datosProducto !=null) {
			foreach ($datosProducto as $datos) {
	 ?>

            <input type="hidden" name="idProducto" id="id" value="<?php echo $datos['idProducto']?>"><br>

            <label for="name">Nombre del producto:</label>
            <input type="text" name="nombreProducto" id="nombre" value="<?php echo $datos['nombreProducto']?>"><br>

            <label for="cantidad">Cantidad disponible:</label>
            <input type="number" name="cantidadProducto" id="cantidad" value="<?php echo $datos['cantidadProducto']?>"><br>

            <label for="date">Fecha de caducidad:</label>
            <input type="date" name="fechaCaducidad" id="fecha" value="<?php echo $datos['fechaCaducidad']?>"><br>

            <label for="number">Precio (por unidad):</label>
            <input type="number" name="precioUnidad" id="precio" value="<?php echo $datos['precioUnidad']?>"><br>

            <label for="txt">Descripcion del producto</label>
            <input type="text" name="descripcionProducto" id="descripcion" value="<?php echo $datos['descripcionProducto']?>"><br>

            <label for="">Categoria:</label>
            <select name="idCategoria_FK" id="categoria">
                <option value="null">Seleccione una categoria</option>
                <?php $categoria=$modeloCategoria->consultar(); 
                    if ($categoria!=null) {
                    foreach($categoria as $ct){ 
                ?>
                <option <?php echo $datos['idCategoria_FK']===$ct['idCategoria'] ? "selected='selected'":""?> value="<?php echo $ct['idCategoria'];?>"><?php echo $ct['nombreCategoria'];?></option>
                <?php 
                    }
                }
                ?>

            </select><br>

            <input type="file" name="foto"><br>

            <!-- <label for="txt">Estado del producto</label>
            <input type="radio" name="estadoProducto" id="estado" value="1"><label for="">activo</label>

            <input type="radio" name="estadoProducto" id="estado" value="0"><label for="">in-activo</label>

            <input id="boton" type="submit"value="Actualizar"> -->

    	<?php 
	
			}
		}

 	?>
    </form>

    <input type="hidden" class="redirect" value="producto"><br>

    <button onclick="alertaEdit()">Actualizar</button>

    <script src="../../resources/js/formulario.js"></script>
</body>
</html>