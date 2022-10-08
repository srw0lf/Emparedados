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

    <h1>Clientes Registrados</h1>

    <table width="100%">
        <tr>
            <th>ID</th>
            <th>Nombre(s)</th>
            <th>Apellido(s)</th>
            <th>Telefono/ número celular</th>
            <!-- <th>Usuario</th> -->
            <th colspan="3"><a type="button" class="btn btn-outline-success"  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $cliente=$modeloCliente->consultar();  
            if ($cliente!=null) {
                foreach($cliente as $cl){
            ?>

            <td><?php echo $cl['idCliente'];?></td>
            <td><?php echo $cl['nombreCliente'];?></td>
            <td><?php echo $cl['apellidoCliente'];?></td>
            <td><?php echo $cl['telefonoCliente'];?></td> 
            <!-- <td><?php //echo $cl['nombreUsuario'];?></td> -->

            <td>
                <a type="button" class="btn btn-outline-primary" href="edit.php?id=<?php echo $cl['idCliente']; ?>">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </td>
            <td>
                <a type="button" class="btn btn-outline-info" href="ver.php?id=<?php echo $cl['idCliente']; ?>">
                    <i class="fa-solid fa-eye"></i> 
                </a>
            </td>
            <td>
                <a type="button" class="btn btn-outline-danger"onclick="borrar(event,'<?php echo $cl['idCliente']?>')">
                    <i class="fa-solid fa-trash"></i>
                    <input type="hidden" class="redirect" value="Cliente">
                </a>
            </td>
        </tr>
        <?php 
            }
        }
        ?>
        
    </table>
</body>
</html>