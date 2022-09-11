<?php 
require_once('../../../Models/Cajero.php');
$modeloCajero=new cajero();

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

    <h1>Cajeros Registrados</h1>

    <table width="100%">
        <tr>
            <th>ID</th>
            <th>Nombre(s)</th>
            <th>Apellido(s)</th>
            <th>Dirección</th>
            <th>Tipo de documento</th>
            <th>Número de documento</th>
            <th>Telefono/ número celular</th>
            <!-- <th>Usuario</th> -->
            <th colspan="3"><a  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $cajero=$modeloCajero->consultar();  
            if ($cajero!=null) {
                foreach($cajero as $ca){
            ?>

            <td><?php echo $ca['idCajero'];?></td>
            <td><?php echo $ca['nombreCajero'];?></td>
            <td><?php echo $ca['apellidoCajero'];?></td>
            <td><?php echo $ca['direccionCajero'];?></td>
            <td><?php echo $ca['nombreTipoDoc'] ?></td> 
            <td><?php echo $ca['numeroTipoDoc'];?></td>
            <td><?php echo $ca['telefonoCajero'];?></td> 
            <!-- <td><?php //echo $ca['nombreUsuario'];?></td> -->

            <td><a href="edit.php?id=<?php echo $ca['idCajero']; ?>">Editar</a></td>
            <td><a href="ver.php?id=<?php echo $ca['idCajero']; ?>">Ver</a></td>
            <td><a href="delete.php?id=<?php echo $ca['idCajero']; ?>">Eliminar</a></td>
        </tr>
        <?php 
            }
        }
        ?>
        
    </table>
</body>
</html>