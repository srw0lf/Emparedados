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

    <form action="" method="post">
        <input type="hidden" name="idCajero" id="id">

        <label for="name">Nombre(s):</label>
        <input type="text" name="nombreCajero" id="nombre"><br>

        <label for="apellido">Apellido(s):</label>
        <input type="text" name="apellidoCajero" id="apellido"><br>

        <label for="adress">Dirección:</label>
        <input type="text" name="direccionCajero" id="direccion"><br>

        <label for="number">Número de documento:</label>
        <input type="number" name="telefonoCajero" id="telefono"><br>

        <label for="number">Telefono/ número celular:</label>
        <input type="number" name="telefonoCajero" id="telefono"><br><br>

        <button type="submit" name="bt-enviar" id="bt-enviar">Registrar</button>
    </form>
</body>
</html>