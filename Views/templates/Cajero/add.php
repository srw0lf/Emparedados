<?php 
require_once('../../../Models/Cajero.php');
$modeloCajero=new cajero();

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
</head>
<body>

    <h1>Registrar cajero</h1>

    <form action="../../../Controllers/Cajero/add.php" method="POST">
        <input type="hidden" name="idCajero" id="id"><br>

        <label for="name">Nombre(s):</label>
        <input type="text" name="nombreCajero" id="nombre"><br>

        <label for="apellido">Apellido(s):</label>
        <input type="text" name="apellidoCajero" id="apellido"><br>

        <label for="adress">Dirección:</label>
        <input type="text" name="direccionCajero" id="direccion"><br>

        <label for="">Tipo de documento:</label>
        <select name="idTipoDoc_FK" id="tipodoc">
            <option value="null">Seleccione un tipo de documento</option>
            <?php $tipoDoc=$modeloTipoDoc->consultar(); 
            if ($tipoDoc!=null) {
                foreach($tipoDoc as $td){
            ?>
            <option value="<?php echo $td['idTipoDoc'];?>"><?php echo $td['nombreTipoDoc'];?></option>
            <?php 
                }
            }
            ?>

        </select><br>

        <label for="number">Número de documento:</label>
        <input type="number" name="numeroTipoDoc" id="numero"><br>

        <label for="number">Telefono/ número celular:</label>
        <input type="number" name="telefonoCajero" id="telefono"><br>

        <input type="submit" name="bt-enviar" id="bt-enviar" value="Registar">
    </form>
</body>
</html>