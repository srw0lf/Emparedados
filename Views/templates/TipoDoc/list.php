<?php 
require_once('../../../Models/TipoDoc.php');
$modeloTipoDoc=new tipoDoc();

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
            <th colspan="2"><a  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $tipoDoc=$modeloTipoDoc->consultar(); 
            if ($tipoDoc!=null) {
                foreach($tipoDoc as $td){
            ?>
            
            <td><?php echo $td['idTipoDoc'];?></td>
            <td><?php echo $td['nombreTipoDoc'];?></td>

            <td><a href="edit.php?id=<?php echo $td['idTipoDoc']; ?>">Editar</a></td>
            <td><a href="ver.php?id=<?php echo $td['idTipoDoc']; ?>">Ver</a></td>
            <td><a href="delete.php?id=<?php echo $td['idTipoDoc']; ?>">Eliminar</a></td>
        </tr>
        <?php 
            }
        }
        ?>
        
    </table>
</body>
</html>