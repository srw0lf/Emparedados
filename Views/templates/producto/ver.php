<?php 
require_once('../../../Models/Producto.php');
$modeloProducto=new producto();

if ($_GET) {
    $id=$_GET['id'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuaruio prueba</title>

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


	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    <h1>Ver Producto</h1>

    <?php
        $datosProducto=$modeloProducto->consultarxid($id);  
		if ($datosProducto !=null) {
			foreach ($datosProducto as $datos) {
    ?>

    <p>
        <b>Foto: </b> <img src="../../../Uploads/<?php echo $datos['foto'];?>" alt="" width="100"><br>
        <b>Id: </b><?php echo $datos['idProducto'];?><br>
        <b>Nombre: </b><?php echo $datos['nombreProducto'];?><br>
        <b>Cantidad: </b><?php echo $datos['cantidadProducto'];?><br>
        <b>Fecha de caducidad: </b><?php echo $datos['fechaCaducidad'];?><br>
        <b>Precio: </b><?php echo $datos['precioUnidad'];?><br>
        <b>Descripcion: </b><?php echo $datos['descripcionProducto'];?><br>
        <b>Estado: </b><?php 
                    if ($datos['estadoProducto']==1) {
                        echo 'activo';
                    }elseif ($datos['estadoProducto']==0) {
                        echo 'in-activo';
                    }
                ?>
    </p>
    
    <?php
            }
        } 
    ?>

    <h1>Datos Producto</h1>

	<?php 
        $datosProducto=$modeloProducto->verCat($id); 
		if ($datosProducto !=null) {
			foreach ($datosProducto as $datos) {
	?>

    <p>
    <b>Id: </b><?php echo $datos['idCategoria']?><br>

    <b>Nombre: </b><?php echo $datos['nombreCategoria']?><br>

    <b>Descripcion: </b><?php echo $datos['descripcion']?>
    
    </p>
	
	<?php 
                }
			}else{
                echo '<p>No hay categorias afilidas a este producto</p>';
            }
    ?>

    <script src="../../resources/js/formulario.js"></script>
    
</body>
</html>