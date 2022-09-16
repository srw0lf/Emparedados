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

    <form method="POST" action="../../../Controllers/Usuario/add.php">
	
    <!--<label>Id :</label>-->
    <input type="hidden" name="idUsuario" minlength="7" maxlength="12" required><br>
  <!--El id debe tener una longitud entre 7 y 12 caracteres numericos-->
    <label>Nombre:</label>
    <input type="text" name="nombreUsuario" placeholder="Ingrese su nombre" minlength="3" maxlength="50" required  pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>
   <!--nombre de usuario. Obligatorio,minimo 11 caracteres-->
    <label>Correo:</label>
    <input type="email" name="correoUsuario" placeholder="digite su correo" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"><br>
  <!--Correo de usuario debe ser ej@ejemplo.com-->
    <label>Contraseña:</label>
    <input type="password" name="passworUsuario" placeholder="Ingrese una contraseña" minlength="8" required><br>
  <!--Contraseña obligatoria minimo 8 caracteres-->
    <label>Rol:</label>
    <select name="rolUsuario" id="rol">
        <option value="ninguno">Seleccione un rol</option>
        <option value="Administrador">Administrador</option>
        <option value="Cajero">Cajero</option>
        <option value="Cliente">Cliente</option>
    </select><br>

    <label>Estado:</label>

    <input id="radio" type="radio" name="estadoUsuario"  value="1"><b>Activo</b>
    <input id="radio" type="radio" name="estadoUsuario"  value="0"><b>In-activo</b><br>

    <input id="boton" type="submit"value="Registrar">

    </div>

    </div>		
    </form>
    
</body>
</html>