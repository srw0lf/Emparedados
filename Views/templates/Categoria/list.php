<?php 
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

    <h1>Tipos de documentos registrados</h1>

    <table width="100%">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th colspan="2"><a  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $categoria=$modeloCategoria->consultar(); 
            if ($categoria!=null) {
                foreach($categoria as $ct){
            ?>
            
            <td><?php echo $ct['idCategoria'];?></td>
            <td><?php echo $ct['nombreCategoria'];?></td>
            <td><?php echo $ct['descripcion'];?></td>

            <td><a href="edit.php?id=<?php echo $ct['idCategoria']; ?>">Editar</a></td>
            <td><a href="ver.php?id=<?php echo $ct['idCategoria']; ?>">Ver</a></td>
            <td><a href="delete.php?id=<?php echo $ct['idCategoria']; ?>">Eliminar</a></td>
        </tr>
        <?php 
            }
        }
        ?>
        
    </table>
</body>
</html>