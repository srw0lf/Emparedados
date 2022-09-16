<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="../../../Controllers/Administrador/add.php" method="POST">
        <input type="hidden" name="idAdministrador" id="id"><br>

        <label for="name">Nombre(s):</label>
        <input type="text" name="nombreAdministrador" id="nombre"><br>

        <label for="apellido">Apellido(s):</label>
        <input type="text" name="apellidoAdministrador" id="apellido"><br>

        <label for="number">Telefono/ número celular:</label>
        <input type="number" name="telefonoAdministrador" id="telefono"><br>

        <label for="number">Nit de la Empresa:</label>
        <input type="number" name="nitEmpresa" id="nit"><br>

        <input type="submit" name="bt-enviar" id="bt-enviar" value="Registar">
    </form>
</body>
</html>