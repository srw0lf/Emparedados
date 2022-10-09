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