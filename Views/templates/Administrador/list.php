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
<div>
	<h1>Administradores Registrados</h1>
	<table width="100%" id="datat">
	<tr>
		<th>ID</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Teléfono</th>
		<th>Nit</th>
		<th><a href="add.php">Registrar Nuevo</a></th>
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
		<td>
                <a type="button" class="btn btn-outline-primary" href="edit.php?id=<?php echo $adm['idAdministrador']; ?>">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>

                <a type="button" class="btn btn-outline-info" href="ver.php?id=<?php echo $adm['idAdministrador']; ?>">
                    <i class="bi bi-eye"></i> 
                </a>
                
                <a type="button" class="btn btn-outline-danger"onclick="borrar(event,'<?php echo $adm['idAdministrador']?>')">
                    <i class="bi bi-trash"></i>
                    <input type="hidden" class="redirect" value="Administrador">
                </a>
        		</td>
	</tr>
	<?php 
        }
    }
	?>
	
</table>

<script>

        var datat=document.querySelector("#datat"); 
        var dataTable=new DataTable("#datat",{ 
          perPage:10,
          labels: {
              placeholder: "Buscar por palabra clave...",
              perPage: "{select} Seleccionar numero de resultados",
              noRows: "No se encontraron registros",
              info: "Mostrando {start} a {end} de {rows} registros",
          }
        } ) ;
        
        
        </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="../../resources/js/formulario.js"></script>
</body>
</html>