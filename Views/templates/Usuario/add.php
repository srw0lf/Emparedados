<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emparedados</title>

    <link rel="stylesheet" href="../../resources/css/sweet.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Links paginacion data table -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.css">
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://kit.fontawesome.com/bcbd8b5d8b.js" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <h1>Agregar Usuario</h1>

    <form method="POST" action="../../../Controllers/Usuario/add.php" enctype="multipart/form-data">
    <input type="hidden" name="idUsuario"><br>

    <label>Nombre</label>
    <input type="text" name="nombreUsuario"><br>

    <label>Correo</label>
    <input type="email" name="correoUsuario"><br>

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