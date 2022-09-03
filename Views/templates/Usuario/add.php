<?php 
// require_once('../../../Models/Cajero.php');
// $modeloCajero=new cajero();

// require_once('../../../Models/TipoDoc.php');
// $modeloTipoDoc=new tipoDoc();

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

    <h1>Registrar Usuario</h1>

    <form action="../../../Controllers/Usuario/add.php" method="POST">
        <input type="text" name="idUsuario" id="id"><br>

        <label for="name">Nombre(s):</label>
        <input type="text" name="nombreUsuario" id="nombre"><br>

        <label for="">Rol:</label>
        <select name="rolUsuario" id="">
            <option value="administrador">Administrador</option>
            <option value="cajero">Cajero</option>
            <option value="cliente">Cliente</option>
        </select>

        <label for="adress">Correo:</label>
        <input type="text" name="correoUsuario" id="correo"><br>

        <label for="adress">Contraseña:</label>
        <input type="text" name="contraseñaUsuario" id="contraseña"><br>

        <label for="txt">Estado:</label>
        <input type="radio" name="estadoUsuario" id="estado" value="1">activo

        <input type="radio" name="estadoUsuario" id="estado" value="0">in-activo

        <input type="submit" name="bt-enviar" id="bt-enviar" value="Registar">
    </form>
</body>
</html>