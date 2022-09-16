<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emparedados</title>
</head>
<body>

    <h1>Registrar Pedido</h1>

    <form action="" method="post">
        <input type="hidden" name="idPedido" id="id">

        <label for="name">Fecha:</label>
        <input type="date" name="fechaPedido" ><br>

        <label for="adress">Dirección:</label>
        <input type="text" name="direccionPedido" id="direccion" minlength="6" maxlength="50" required><br><br>

        <!--Datos del producto-->

        <input type="hidden" name="idProducto" id="id">

        <label for="producto">Producto:</label>
        <input type="text" name="nombreProducto" id="name" maxlength="30" required pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

        <label for="precio">Precio:</label>
        <input type="number" name="precioUnidad" id="precio" required><br>

        <!--Datos de la factura-->

        <form action="">

            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" min="1" value="1" required> 
            <button type="submit">x</button>
            <br>

        </form>

        

        <!--Total a pagar-->

        <label for="total">total a pagar:</label>
        <input type="number" name="total" id="total" value="" readonly><br>


        <button type="submit" name="bt-enviar" id="bt-enviar">Pagar</button>
    </form>
</body>
</html>