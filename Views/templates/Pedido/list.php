<?php 
require_once('../../../Models/Cajero.php');
$modeloCajero=new cajero();

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

    <h1>Cajeros Registrados</h1>

    

    <form action="">

    <table width="100%">
        <tr>
            <th>ID</th>
            <th>Direccion</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>subtotal</th>
            <th colspan="2"><a  href="add.php">Registrar Nuevo</a></th>
        </tr>
        <tr>
            <?php $cajero=$modeloCajero->consultar(); 
            if ($cajero!=null) {
                foreach($cajero as $ca){
            ?>
            
            <td><input type="text" value="<?php //echo $ca[''];?>" readonly></td>
            <td><input type="text" value="<?php //echo $ca[''];?>" readonly></td>
            <td><input type="text" value="<?php //echo $ca[''];?>" readonly></td>
            <td><input type="number" value="10" id="precio" readonly></td>
            <td><input type="number" value="20" id="Cantidad"readonly></td>
            

            

            

            <td><a href="ver.php?id=<?php echo $ca['idCajero']; ?>">Ver</a></td>
            <td><a href="delete.php?id=<?php echo $ca['idCajero']; ?>">Eliminar</a></td>
        </tr>
        <?php 
            }
        }
        ?>

        <tr>
            <th colspan="8">
                <label for="">Total</label>
                <input type="text" value="<?php ?>" readonly>
            </th>
        </tr>
    </table>

    <button type="submit">Realizar venta</button>
    </form>

    <script src="../../resources/js/Venta.js"></script>

</body>
</html>