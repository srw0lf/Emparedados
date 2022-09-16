<?php 
require_once('../../Models/Administrador.php');

$modeloAdministrador=new administrador();

$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b><p>Esta seguro que desea eliminar este registro?</p></b>
    <form method="POST" action="../../../Controllers/Administrador/delete.php">
        <input type="hidden" name="idAdministrador" value="<?php echo $id; ?>">
        <input id="boton" type="submit" Value="Eliminar">
    </form>
</body>
</html>