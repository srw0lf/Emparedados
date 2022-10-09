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

    <link rel="stylesheet" href="../../resources/css/sweet.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <!-- Links paginacion data table -->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 

   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.css">
   
   <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.js"></script>
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

   <script src="https://kit.fontawesome.com/bcbd8b5d8b.js" crossorigin="anonymous"></script>

</head>
<body>

    <h1>Usuarios Registrados</h1>

    <table id="datat" width="100%">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Estado</th>
            <th colspan="3"><a type="button" class="btn btn-outline-success" href="add.php">Registrar Nuevo</a></th>
        </tr>
        <?php for ($i=0; $i < 1 ; $i++) { 
        ?>
        <tr>
            <?php $usuario=$modeloUsuario->consultar(); 
            if ($usuario!=null) {
                foreach($usuario as $us){
            ?>
            
            <td><?php echo $us['idUsuario'];?></td>
            <td><?php echo $us['nombreUsuario'];?></td>
            <td><?php echo $us['correoUsuario'];?></td>
            <td><?php echo $us['rolUsuario'];?></td>
            <td>
                <?php 
                    if ($us['estadoUsuario']==1) {
                        echo 'activo';
                    }elseif ($us['estadoUsuario']==0) {
                        echo 'in-activo';
                    }
                ?>

                <form action="../../../Controllers/Usuario/dinamic.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $us['idUsuario'];?>">
                    <input type="hidden" readonly="" value="<?php 
                    if ($us['estadoUsuario']==1) {
                        echo '0';
                    }elseif ($us['estadoUsuario']==0) {
                        echo '1';
                    }
                    ?>" name="estado">

                    <button type="submit" class="btn btn-warning"><?php 
                    if ($us['estadoUsuario']==1) {
                        echo 'in-activar';
                    }elseif ($us['estadoUsuario']==0) {
                        echo 'activar';
                    }
                    ?></button>
                </form>
            </td>

            <td>
                <a type="button" class="btn btn-outline-primary" href="edit.php?id=<?php echo $us['idUsuario']; ?>">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </td>
            <td>
                <a type="button" class="btn btn-outline-info" href="ver.php?id=<?php echo $us['idUsuario']; ?>&rol=<?php echo $us['rolUsuario']?>">
                    <i class="fa-solid fa-eye"></i>
                </a>
            </td>
            <td>
                <a type="button" class="btn btn-outline-danger"onclick="borrar(event,'<?php echo $us['idUsuario']?>')">
                    <i class="fa-solid fa-trash"></i>
                    <input type="hidden" class="redirect" value="Usuario">
                </a>
            </td>
        </tr>
        <?php 
                }      
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
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->

    <script src="../../resources/js/formulario.js"></script>

</body>
</html>