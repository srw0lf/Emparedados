<?php 
require_once('../../../Models/Administrador.php');
$modeloAdministrador=new administrador();

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

    <h1>Administradores Registrados</h1>

    <table width="100%">
        <tr>
            <th>ID</th>
            <th>Nombre(s)</th>
            <th>Apellido(s)</th>
            <th>Telefono/ número celular</th>
            <th>Nit empresa</th>
            <!-- <th>Usuario</th> -->
            <th colspan="3"><a  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $administrador=$modeloAdministrador->consultar();  
            if ($administrador!=null) {
                foreach($administrador as $ad){
            ?>

            <td><?php echo $ad['idAdministrador'];?></td>
            <td><?php echo $ad['nombreAdministrador'];?></td>
            <td><?php echo $ad['apellidoAdministrador'];?></td>
            <td><?php echo $ad['telefonoAdministrador'];?></td> 
            <td><?php echo $ad['nitEmpresa'];?></td> 
    
            <!-- <td><?php //echo $ad['nombreUsuario'];?></td> -->

            <td><a href="edit.php?id=<?php echo $ad['idAdministrador']; ?>">Editar</a></td>
            <td><a href="ver.php?id=<?php echo $ad['idAdministrador']; ?>">Ver</a></td>
            <td><a href="delete.php?id=<?php echo $ad['idAdministrador']; ?>">Eliminar</a></td>
        </tr>
        <?php 
            }
        }
        ?>
        
    </table>
</body>
</html>