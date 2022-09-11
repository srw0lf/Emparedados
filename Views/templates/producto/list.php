<?php 
require_once('../../../Models/Producto.php');
$modeloProducto=new producto();

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

    <h1>Productos Disponibles</h1>

            <?php
        
            $producto=$modeloProducto->consultar(); 
            if ($producto!=null) {
                foreach($producto as $pr){
                    date_default_timezone_set('America/Bogota');
                    if ($pr['estadoProducto']==1 && $pr['cantidadProducto']!==0 && $pr['fechaCaducidad']>date('Y-m-d')) {

                    
            ?>

            <div class="producto">
                <img src="http://c.files.bbci.co.uk/14D0C/production/_103206258_sandwich.png" alt="" width=200>
                <p><b>nombre: </b><?php echo $pr['nombreProducto'];?><br>
                <b>Precio: </b><?php echo $pr['precioUnidad'];?><br>
                <b>descripcion: </b><?php echo $pr['descripcionProducto'];?><br>
                <b>Categoria: </b><?php echo $pr['nombreCategoria'];?><br>
                </p>
            </div>
        
            
            
            <?php 
                    }       
                }
            }
            ?>
</body>
</html>