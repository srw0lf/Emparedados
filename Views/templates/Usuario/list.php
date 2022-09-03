<?php 
require_once('../../../Models/Usuario.php');
$modeloUsuario=new Usuario();

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

    <h1>Reguistro Usuario</h1>

    <table width="100%">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Estado</th>
            <th colspan="2"><a  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $Usuario=$modeloUsuario->consultar(); 
            if ($Usuario!=null) {
                foreach($Usuario as $use){
            ?>
            
            <td><?php echo $use['idUsuario'];?></td>
            <td><?php echo $use['nombreUsuario'];?></td>
            <td><?php echo $use['rolUsuario'];?></td>
            <td><?php echo $use['correoUsuario'];?></td>
            <td><?php echo $use['contraseñaUsuario'];?></td>
            <td>
                <?php 
                    if ($use['estadoUsuario']==1) {
                        echo 'Activo';
                    }elseif ($use['estadoUsuario']==0) {
                        echo 'Inactivo';
                    }
                ?>
            </td>
            
                
            
          
            <td><a href="edit.php?id=<?php echo $use['idUsuario']; ?>">Editar</a></td>
            <td><a href="ver.php?id=<?php echo $use['idUsuario']; ?>">Ver</a></td>
            <td><a href="delete.php?id=<?php echo $use['idUsuario']; ?>">Eliminar</a></td>
        </tr>
        <?php 
            }
        }
        ?>
        
    </table>
</body>
</html>