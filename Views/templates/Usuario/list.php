<?php 
require_once('../../../Models/Usuario.php');
$modeloUsuario=new usuario();

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

    <h1>Usuarios Registrados</h1>

    <table width="100%">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Rol</th>
            <th>Estado</th>
            <th colspan="2"><a  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $usuario=$modeloUsuario->consultar(); 
            if ($usuario!=null) {
                foreach($usuario as $us){
            ?>
            
            <td><?php echo $us['idUsuario'];?></td>
            <td><?php echo $us['nombreUsuario'];?></td>
            <td><?php echo $us['correoUsuario'];?></td>
            <td><?php echo $us['passworUsuario'];?></td>
            <td><?php echo $us['rolUsuario'];?></td>
            <td>
                <?php 
                    if ($us['estadoUsuario']==1) {
                        echo 'activo';
                    }elseif ($us['estadoUsuario']==0) {
                        echo 'in-activo';
                    }
                ?>
            </td>
            <td><a href="edit.php?id=<?php echo $us['idUsuario']; ?>">Editar</a></td>
            <!--<td><a href="ver.php?id=<?php //echo $us['idUsuario']; ?>">Ver</a></td>-->
            <td><a href="delete.php?id=<?php echo $us['idUsuario']; ?>">Eliminar</a></td>
        </tr>
        <?php 
            }
        }
        ?>
        
    </table>

</body>
</html>