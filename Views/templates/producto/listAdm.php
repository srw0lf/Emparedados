<?php 
require_once('../../../Models/Producto.php');
$modeloProducto=new producto();

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

    <h1>Productos Registrados</h1>

    <table width="100%" id="datat">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Fecha caducidad</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Estado</th>
            <th><a  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $producto=$modeloProducto->consultar(); 
            if ($producto!=null) {
                foreach($producto as $pr){
            ?>
            
            <td><?php echo $pr['idProducto'];?></td>
            <td><img src="../../../Uploads/<?php echo $pr['foto'];?>" alt="" width="100"></td>
            <td><?php echo $pr['nombreProducto'];?></td>
            <td><?php echo $pr['cantidadProducto'];?></td>
            <td><?php echo $pr['fechaCaducidad'];?></td>
            <td><?php echo $pr['precioUnidad'];?></td>
            <td><?php echo $pr['descripcionProducto'];?></td>
            <td><?php echo $pr['nombreCategoria'];?></td>
            <td>
                <?php 
                    if ($pr['estadoProducto']==1) {
                        echo 'activo';
                    }elseif ($pr['estadoProducto']==0) {
                        echo 'in-activo';
                    }
                ?>
                <form action="../../../Controllers/Producto/dinamic.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $pr['idProducto'];?>">
                    <input type="hidden" readonly="" value="<?php 
                    if ($pr['estadoProducto']==1) {
                        echo '0';
                    }elseif ($pr['estadoProducto']==0) {
                        echo '1';
                    }
                    ?>" name="estado">

                    <button type="submit"><?php 
                    if ($pr['estadoProducto']==1) {
                        echo 'in-activar';
                    }elseif ($pr['estadoProducto']==0) {
                        echo 'activar';
                    }
                    ?></button>
                </form>
            </td>
            <td>
                <a type="button" class="btn btn-outline-primary" href="edit.php?id=<?php echo $pr['idProducto']; ?>">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>

                <a type="button" class="btn btn-outline-info" href="ver.php?id=<?php echo $pr['idProducto']; ?>">
                    <i class="bi bi-eye"></i> 
                </a>
                
                <a type="button" class="btn btn-outline-danger"onclick="borrar(event,'<?php echo $pr['idProducto']?>')">
                    <i class="bi bi-trash"></i>
                    <input type="hidden" class="redirect" value="producto">
                </a>
            </td>
        </tr>
        <?php 
            }
        }
        ?>
        
    </table>

    <a href="list.php">Productos disponibles</a>

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