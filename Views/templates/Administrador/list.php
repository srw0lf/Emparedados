<?php 
require_once('../../Models/Administrador.php');
$modeloAdministrador=new administrador();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
	<table width="100%">
	<tr>
		<th>ID</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Teléfono</th>
		<th>Nit</th>
		<th colspan="2"><a href="add.php">Registrar Nuevo</a></th>
		<tr>
		<?php $Administrador=$modeloAdministrador->consultar(); 
		if ($Administrador!=null) {
			foreach($Administrador as $adm){
		?>
		
		<td><?php echo $adm['idAdministrador'];?></td>
		<td><?php echo $adm['nombreAdministrador'];?></td>
		<td><?php echo $adm['apellidoAdministrador'];?></td>
		<td><?php echo $adm['telefonoAdministrador'];?></td>
		<td><?php echo $adm['nitEmpresa'];?></td>
		<td><a href="edit.php?id=<?php echo $adm['idAdministrador']; ?>">Editar</a></td>
		<td><a href="delete.php?id=<?php echo $adm['idAdministrador']; ?>" >Eliminar</a></td>
	</tr>
	<?php 
        }
    }
	?>
	
</table>
</body>
</html>