<?php 
	require_once('../../../Models/Cajero.php');
	$modeloCajero=new Cajero();
	$id=$_GET['id'];
	$datosCajero=$modeloCajero->consultarxid($id);

    require_once('../../../Models/TipoDoc.php');
    $modeloTipoDoc=new tipoDoc();
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <h1>Registrar cajero</h1>

    <form action="../../../Controllers/Cajero/edit.php" method="post" id="editar">

    <?php 
		if ($datosCajero !=null) {
			foreach ($datosCajero as $datos) {
	 ?>

        <input type="hidden" name="idCajero" id="id" value="<?php echo $datos['idCajero']?>">

        <label for="name">Nombre(s):</label>
        <input type="text" name="nombreCajero" id="nombre" value="<?php echo $datos['nombreCajero']?>"><br>

        <label for="apellido">Apellido(s):</label>
        <input type="text" name="apellidoCajero" id="apellido" value="<?php echo $datos['apellidoCajero']?>"><br>

        <label for="adress">Dirección:</label>
        <input type="text" name="direccionCajero" id="direccion" value="<?php echo $datos['direccionCajero']?>"><br>

        <label for="">Tipo de documento:</label>
        <select name="idTipoDoc_FK" id="tipodoc">
            <option value="<?php echo $datos['idTipoDoc_FK']?>">Seleccione un tipo de documento</option>
            <?php $tipoDoc=$modeloTipoDoc->consultar(); 
            if ($tipoDoc!=null) {
                foreach($tipoDoc as $td){
            ?>
            <option <?php echo $datos['idTipoDoc_FK']===$td['idTipoDoc'] ? "selected='selected'":""?>  value="<?php echo $td['idTipoDoc']?>"><?php echo $td['nombreTipoDoc'];?></option>
            <?php 
                }
            }
            ?>

        </select><br>

        <label for="number">Número de documento:</label>
        <input type="number" name="numeroTipoDoc" id="telefono" value="<?php echo $datos['numeroTipoDoc']?>"><br>

        <label for="number">Telefono/ número celular:</label>
        <input type="number" name="telefonoCajero" id="telefono" value="<?php echo $datos['telefonoCajero']?>"><br><br>

        <!-- <button type="submit" name="bt-enviar" id="bt-enviar">Actualizar</button> -->

    	<?php 
	
			}
		}

 	?>
    </form>

    <input type="hidden"  class="redirect" value="Cajero">

    <button onclick="alertaEdit()">Actualizar</button>

    <script src="../../resources/js/formulario.js"></script>
</body>
</html>