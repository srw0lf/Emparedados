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

    <h1>Productos Registrados</h1>

    <table width="100%">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Fecha caducidad</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Estado</th>
            <th colspan="2"><a  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $producto=$modeloProducto->consultar(); 
            if ($producto!=null) {
                foreach($producto as $pr){
            ?>
            
            <td><?php echo $pr['idProducto'];?></td>
            <td><img src="../../../Uploads/<?php echo $pr['foto'];?>" alt="" width="200"></td>
            <td><?php echo $pr['nombreProducto'];?></td>
            <td><?php echo $pr['cantidadProducto'];?></td>
            <td><?php echo $pr['fechaCaducidad'];?></td>
            <td><?php echo $pr['precioUnidad'];?></td>
            <td><?php echo $pr['descripcionProducto'];?></td>
            <td><?php echo $pr['nombreCategoria'];?></td>
            <td>
                <?php 
                    if ($pr['estadoProducto']==1) {
                        echo 'activo';
                    }elseif ($pr['estadoProducto']==0) {
                        echo 'in-activo';
                    }
                ?>
            </td>
            <td><a href="edit.php?id=<?php echo $pr['idProducto']; ?>">Editar</a></td>
            <!--<td><a href="ver.php?id=<?php //echo $pr['idProducto']; ?>">Ver</a></td>-->
            <td><a href="delete.php?id=<?php echo $pr['idProducto']; ?>">Eliminar</a></td>
        </tr>
        <?php 
            }
        }
        ?>
        
    </table>

    <a href="list.php">Productos disponibles</a>
</body>
</html>