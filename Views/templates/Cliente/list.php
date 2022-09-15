<?php 
require_once('../../../Models/Cliente.php');
$modeloCliente=new cliente();

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

    <h1>Clientes Registrados</h1>

    <table width="100%">
        <tr>
            <th>ID</th>
            <th>Nombre(s)</th>
            <th>Apellido(s)</th>
            <th>Dirección</th>
            <th>Telefono/ número celular</th>
            <!-- <th>Usuario</th> -->
            <th colspan="3"><a  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $cliente=$modeloCliente->consultar();  
            if ($cliente!=null) {
                foreach($cliente as $cl){
            ?>

            <td><?php echo $cl['idCliente'];?></td>
            <td><?php echo $cl['nombreCliente'];?></td>
            <td><?php echo $cl['apellidoCliente'];?></td>
            <td><?php echo $cl['direccionCliente'];?></td>
            <td><?php echo $cl['telefonoCliente'];?></td> 
            <!-- <td><?php //echo $cl['nombreUsuario'];?></td> -->

            <td><a href="edit.php?id=<?php echo $cl['idCliente']; ?>">Editar</a></td>
            <!--<td><a href="ver.php?id=<?php echo $cl['idCliente']; ?>">Ver</a></td>-->
            <td><a href="delete.php?id=<?php echo $cl['idCliente']; ?>">Eliminar</a></td>
        </tr>
        <?php 
            }
        }
        ?>
        
    </table>
</body>
</html>