<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
</head>
<body>

	<form method="POST" action="Controllers/Usuario/login.php" >

	<h1>Inicio de Sesión</h1>

	<label>Correo</label>
	<input type="email" name="correoUsuario" placeholder="Ingrese su correo"><br>

	<label>Contraseña</label>
	<input type="password" name="passworUsuario" placeholder="Ingrese su contraseña"><br>

    <label>Rol:</label>
    <select name="rolUsuario" id="rol">
        <option value="ninguno">Seleccione un rol</option>
        <option value="Administrador">Administrador</option>
        <option value="Cajero">Cajero</option>
        <option value="Cliente">Cliente</option>
    </select><br>
	

	<input id="boton" type="submit" value="ingresar">	
</form>
</body>
</html>