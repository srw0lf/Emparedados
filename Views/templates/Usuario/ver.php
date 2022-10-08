<?php 
require_once('../../../Models/Usuario.php');
$modeloUsuario=new usuario();

if ($_GET) {
    $id=$_GET['id'];
    $rol=$_GET['rol'];
}

// $datosUsuario=$modeloUsuario->consultarxid($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuaruio prueba</title>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    <h1>Ver Usuario</h1>
	<?php 
    if ($rol=='Administrador') {
        $datosUsuario=$modeloUsuario->verAdm($id);  
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

    <p><b>Datos Administrador</b><br><br>
    <b>Id: </b><?php echo $datos['idAdministrador']?><br>

    <b>Nombre: </b><?php echo $datos['nombreAdministrador']?><br>

    <b>Apelllido: </b><?php echo $datos['apellidoAdministrador']?><br>

    <b>Telefono: </b><?php echo $datos['telefonoAdministrador']?><br>

    <b>nit: </b><?php echo $datos['nitEmpresa']?><br>
    
    </p>
	

	<!-- <label>Estado:</label><br>
	<input id="radio" type="radio" name="estadoUsuario" value="1"><b>Activo</b>
	<input id="radio" type="radio" name="estadoUsuario" value="0"><b>In-activo</b><br> -->
	<?php 
                }
			}
		} elseif ($rol=='Cliente') {
            $datosUsuario=$modeloUsuario->verCli($id);
            if ($datosUsuario !=null) {
                foreach ($datosUsuario as $datos) {
    ?>

    <p><b>Id: </b><?php echo $datos['idUsuario']?><br>

	<b>Nombre: </b><?php echo $datos['nombreUsuario']?><br>

	<b>Correo: </b><?php echo $datos['correoUsuario']?><br>

	<b>Contraseña: </b><input type="password" id="contraseña" value="<?php echo $datos['passworUsuario']?>"><input type="checkbox" onclick="VerContra()">Ver contraseña <br>

    <b>Rol: </b><?php echo $datos['rolUsuario']?><br>

    
        <b>Estado:</b>
        <?php 
        if ($datos['estadoUsuario']==1) {
            echo 'activo';
        }elseif ($datos['estadoUsuario']==0) {
            echo 'in-activo';
        }?>
    </p>

    <p><b>Datos Cliente</b><br><br>
    <b>Id: </b><?php echo $datos['idCliente']?><br>

    <b>Nombre: </b><?php echo $datos['nombreCliente']?><br>

    <b>Apelllido: </b><?php echo $datos['apellidoCliente']?><br>

    <b>Telefono: </b><?php echo $datos['telefonoCliente']?><br>
    
    </p>

    <?php 
                }
            }
        } elseif ($rol=='Cajero') {
            $datosUsuario=$modeloUsuario->verCaj($id);
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

    <p><b>Datos Cliente</b><br><br>
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
            }
        }
    ?>


	</form>

    <script src="../../resources/js/formulario.js"></script>
    
</body>
</html>