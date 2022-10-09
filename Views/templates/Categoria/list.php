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

    <h1>Tipos de documentos registrados</h1>

    <table width="100%" id="datat">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th colspan="3"><a type="button" class="btn btn-outline-primary"  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $categoria=$modeloCategoria->consultar(); 
            if ($categoria!=null) {
                foreach($categoria as $ct){
            ?>
            
            <td><?php echo $ct['idCategoria'];?></td>
            <td><?php echo $ct['nombreCategoria'];?></td>
            <td><?php echo $ct['descripcion'];?></td>

            <td>
                <a type="button" class="btn btn-outline-primary" href="edit.php?id=<?php echo $ct['idCategoria']; ?>">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </td>
            <td>
                <a type="button" class="btn btn-outline-info" href="ver.php?id=<?php echo $ct['idCategoria']; ?>">
                    <i class="fa-solid fa-eye"></i>
                </a>
            </td>
            <td>
                <a type="button" class="btn btn-outline-danger"onclick="borrar(event,'<?php echo $ct['idCategoria']?>')">
                    <i class="fa-solid fa-trash"></i>
                    <input type="hidden" class="redirect" value="Categoria">
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