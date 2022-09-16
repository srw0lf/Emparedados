<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="../resources/css/Login.css" rel="stylesheet">
	<title>Inicio de Sesión</title>
</head>
 
<body>
	
	<div class="form-structor">
		<div class="signup"> 
			<FORM action="../../Controllers/Usuario/Login.php" method="POST" >
			<img src="../resources/img/logo.png">
			<h2 class="form-title" id="signup">Iniciar sesión</h2>
			<div class="form-holder">
				
				<input type="email" class="input" placeholder="Email" name="correoUsuario" />
				<input type="password" class="input" placeholder="Contraseña" name="passworUsuario"/>
				<select name="rolUsuario" id="rol">
					<option value="ninguno" placeholder="Rol">Seleccionar rol </option>
					<option value="Administrador">Administrador</option>
					<option value="Cajero">Cajero</option>
					<option value="Cliente">Cliente</option>
				</select>
			</div>
			<button type="submit" class="submit-btn">Iniciar sesión</button>
			</FORM>
		</div>
		<div class="login slide-up">
			<div class="center">
				<h2 class="form-title" id="login">Crear cuenta</h2>
				<div class="form-holder">
					<input type="nombre" class="input" placeholder="Nombre" name="nombreUsuario" />
					<input type="email" class="input" placeholder="Email" name="correoUsuario" />
					<input type="password" class="input" placeholder="Contraseña" name="passworUsuario" />
					<input id="radio" type="radio" name="estadoUsuario" value="1"><b>Activo</b>
					<input id="radio" type="radio" name="estadoUsuario" value="0"><b>In-Activo</b>
				</div>
				
					<button class="submit-btn">Crear cuenta</button>
			</div>
		</div>
	</div>
	<script src="../resources/js/login.js"></script>
</form>
</body>
</html>
