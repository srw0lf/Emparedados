<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emparedados</title>
</head>
<body>

    <h1>Registrar tipo de documento</h1>

    <form action="../../../Controllers/Categoria/add.php" method="POST">
        <input type="hidden" name="idCategoria" id="id"><br>

        <label for="name">Nombre:</label>
        <input type="text" name="nombreCategoria" id="nombre" required pattern="[A-Za-zÑñÁÉÍÓÚáéíóú\s]{3,30}"><br>

        <label for="name">Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion" required ><br><br>

        <button type="submit" name="bt-enviar" id="bt-enviar">Registrar</button>
    </form>
</body>
</html>