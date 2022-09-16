<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar factura</h1>

    <?php
        for ($i=0; $i <3 ; $i++) { 
    ?>
    <form action="../../../Controllers/Factura/insert.php" method="POST" id="form_insert">
                <input type="hidden" name="idFactura[]" id="" value="">

                <input type="text" name="idPedido_FK[]" id="" value="">

                <input type="text" name="idProducto_FK[]" id="" value="">

                <input type="number" name="cantidad[]">

            <?php
                }
            ?>

                <button type="submit">registrar</button>
    </form>

    <script src="../../resources/formulario.js"></script>
</body>
</html>