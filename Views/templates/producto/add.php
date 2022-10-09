<?php 
// require_once('../../../Models/Cajero.php');
// $modeloCajero=new cajero();

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

    <h1>Agregar Producto</h1>

    <form method="POST" action="../../../Controllers/producto/add.php" enctype="multipart/form-data">
        <input type="hidden" name="idProducto" id="id"><br>

        <label for="name">Nombre del producto:</label>
        <input type="text" name="nombreProducto" id="nombre"><br>

        <label for="cantidad">Cantidad disponible:</label>
        <input type="number" name="cantidadProducto" id="cantidad"><br>

        <label for="date">Fecha de caducidad:</label>
        <input type="date" name="fechaCaducidad" id="fecha"><br>

        <label for="number">Precio (por unidad):</label>
        <input type="number" name="precioUnidad" id="precio"><br>

        <label for="txt">Descripcion del producto</label>
        <input type="text" name="descripcionProducto" id="descripcion"><br>

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

        <input type="file" name="foto" value='imgDefecto.png'><br>

        <label for="txt">Estado del producto</label>
        <input type="radio" name="estadoProducto" id="estado" value="1"><label for="">activo</label>

        <input type="radio" name="estadoProducto" id="estado" value="0"><label for="">in-activo</label>

        <input id="boton" type="submit"value="Registrar">		
    </form>
    
</body>
</html>