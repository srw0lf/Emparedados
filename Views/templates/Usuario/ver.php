<?php 
require_once('../../../Models/Usuario.php');
$modeloUsuario=new usuario();

if ($_GET) {
    $id=$_GET['id'];
    $rol=$_GET['rol'];
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

    <h1>Ver Usuario</h1>

    <?php
        $datosUsuario=$modeloUsuario->consultarxid($id);  
		if ($datosUsuario !=null) {
			foreach ($datosUsuario as $datos) {
    ?>

    <p><b>Id: </b><?php echo $datos['idUsuario']?><br>

    <b>Nombre: </b><?php echo $datos['nombreUsuario']?><br>

    <b>Correo: </b><?php echo $datos['correoUsuario']?><br>

    <b>Contraseña: </b><input type="password" id="contraseña" value="<?php echo $datos['passworUsuario']?>"><input type="checkbox" onclick="VerContra()">Ver contraseña<br>

    <b>Rol: </b><?php echo $datos['rolUsuario']?><br>


    <b>Estado:</b>
    <?php 
    if ($datos['estadoUsuario']==1) {
        echo 'activo';
    }elseif ($datos['estadoUsuario']==0) {
        echo 'in-activo';
    }?>
    </p>
    
    <?php
            }
        } 
    ?>
	<?php 
    if ($rol=='Administrador') {
        $datosUsuario=$modeloUsuario->verAdm($id); 
        echo '<h1>Datos administrador</h1>'; 
		if ($datosUsuario !=null) {
			foreach ($datosUsuario as $datos) {
	?>

    <p>
    <b>Id: </b><?php echo $datos['idAdministrador']?><br>

    <b>Nombre: </b><?php echo $datos['nombreAdministrador']?><br>

    <b>Apelllido: </b><?php echo $datos['apellidoAdministrador']?><br>

    <b>Telefono: </b><?php echo $datos['telefonoAdministrador']?><br>

    <b>nit: </b><?php echo $datos['nitEmpresa']?><br>
    
    </p>
	
	<?php 
                }
			}else{
                echo '<p>No hay administradores afilidados a este usuario</p>';
            }
		} elseif ($rol=='Cliente') {
            $datosUsuario=$modeloUsuario->verCli($id);
            echo '<h1>Datos cliente</h1>';
            if ($datosUsuario !=null) {
                foreach ($datosUsuario as $datos) {
    ?>

    <p>
    <b>Id: </b><?php echo $datos['idCliente']?><br>

    <b>Nombre: </b><?php echo $datos['nombreCliente']?><br>

    <b>Apelllido: </b><?php echo $datos['apellidoCliente']?><br>

    <b>Telefono: </b><?php echo $datos['telefonoCliente']?><br>
    
    </p>

    <?php 
                }
            }else{
                echo '<p>No hay clientes afilidados a este usuario</p>';
            }
        } elseif ($rol=='Cajero') {
            $datosUsuario=$modeloUsuario->verCaj($id);
            echo '<h1>Datos Cajero</h1>';
            if ($datosUsuario !=null) {
                foreach ($datosUsuario as $datos) {
        
    ?>

    <p>
    <b>Id: </b><?php echo $datos['idCajero']?><br>

    <b>Nombre: </b><?php echo $datos['nombreCajero']?><br>

    <b>Apelllido: </b><?php echo $datos['apellidoCajero']?><br>

    <b>Telefono: </b><?php echo $datos['telefonoCajero']?><br>

    <b>Direccion: </b><?php echo $datos['direccionCajero']?><br>

    <b>Tipo de documento: </b><?php echo $datos['nombreTipoDoc']?><br>

    <b>Numero de documento: </b><?php echo $datos['numeroTipoDoc']?><br>
    
    </p>

    <?php
                }
            }else{
                echo '<p>No hay cajeros afilidados a este usuario</p>';
            }
        }
    ?>


	</form>

    <script src="../../resources/js/formulario.js"></script>
    
</body>
</html>