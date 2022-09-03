<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio de Sesión</title>
</head>
<body>
<h1>Inicio de Sesión</h1>
<hr>
<p>Ingrese sus datos de acceso</p>
<form method="POST" action="../../Controllers/Usuario/Login.php">
	<label for="nu">Correo:</label><br>
	<input type="text" id="correo" name="correoUsuario"  placeholder="ingrese su correo"><br>

	<label for="c">Contraseña:</label><br>
	<input type="password" id="contraseña" name="contraseñaUsuario"  placeholder="ingrese su contraseña"><br>

	<!-- <label for="">Rol:</label>
	<select name="rolUsuario" id="rol">
		<option value="null" checked>Seleccione un rol</option>
		<option value="cliente">Cliente</option>
		<option value="cajero">Cajero</option>
		<option value="administrador">Administrador</option>
	</select><br> -->

	<input type="submit" value="Ingresar">

</form>
</body>
</html>