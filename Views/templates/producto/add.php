<?php 
//require_once('../../../Models/Cajero.php');
//$modeloCajero=new cajero();

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
</head>
<body>

    <h1>Registrar Producto</h1>

    <form action="../../../Controllers/Producto/add.php" method="POST">
        <input type="hidden" name="idProducto" id="id"><br>

        <label for="name">Nombre del producto:</label>
        <input type="text" name="nombreProducto" id="nombre" minlength="8" maxlength="30" required pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

        <label for="cantidad">Cantidad disponible:</label>
        <input type="number" name="cantidadProducto" id="cantidad" required><br>

        <label for="date">Fecha de caducidad:</label>
        <input type="date" name="fechaCaducidad" id="fecha"><br>

        <label for="number">Precio (por unidad):</label>
        <input type="number" name="precioUnidad" id="precio" required><br>

        <label for="txt">Descripcion del producto</label>
        <input type="text" name="descripcionProducto" id="descripcion" minlength="10" maxlength="30" required pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

        <label for="">Categoria:</label>
        <select name="idCategoria_FK" id="categoria">
            <option value="null">Seleccione una categoria</option>
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
        <input type="radio" name="estadoProducto" id="estado"  value="1">activo

        <input type="radio" name="estadoProducto" id="estado" value="0">in-activo

        <input type="submit" name="bt-enviar" id="bt-enviar" value="Registar">
    </form>
</body>
</html>