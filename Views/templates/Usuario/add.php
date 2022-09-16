<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario prueba</title>
</head>
<body>

    <h1>Agregar Usuario</h1>

    <form method="POST" action="#" enctype="multipart/form-data">
    <input type="hidden" name="idUsuario"><br>

    <label>Nombre</label>
    <input type="text" name="nombreUsuario"><br>

    <label>Correo</label>
    <input type="email" name="correoUsuario" placeholder="digite su correo"><br>

    <label>Contraseña</label>
    <input type="password" name="passworUsuario"><br>

    <label>Rol</label>
    <select name="rolUsuario" id="rol">
        <option value="ninguno">Seleccione un rol</option>
        <option value="Administrador">Administrador</option>
        <option value="Cajero">Cajero</option>
        <option value="Cliente">Cliente</option>
    </select><br>

    <label>Estado:</label>

    <input id="radio" type="radio" name="estadoUsuario" value="1"><b>Activo</b>
    <input id="radio" type="radio" name="estadoUsuario" value="0"><b>In-activo</b><br>

    <input id="boton" type="submit"value="Registrar">
    	
    </form>
    
</body>
</html>