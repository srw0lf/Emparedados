<?php 

//require_once('../../../Models/Usuario.php');
//$modeloUsuario=new usuario();

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

    <h1>Registrar Cliente</h1>

    <form action="../../../Controllers/Cliente/add.php" method="POST">
        <input type="hidden" name="idCliente" id="id"><br>

        <label for="name">Nombre(s):</label>
        <input type="text" name="nombreCliente" id="nombre" minlength="3" required pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

        <label for="apellido">Apellido(s):</label>
        <input type="text" name="apellidoCliente" id="apellido" minlength="3" required pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

        <label for="adress">Dirección:</label>
        <input type="text" name="direccionCliente" id="direccion" required><br>

        <label for="number">Telefono/ número celular:</label>
        <input type="number" name="telefonoCliente" id="telefono"  required ><br>

        <input type="submit" name="bt-enviar" id="bt-enviar" value="Registar">
    </form>
</body>
</html>