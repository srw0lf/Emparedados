<?php
     if (isset($_FILES['foto'])) {

        $file_name=$_FILES['foto']['name'];
        $file_tmp=$_FILES['foto']['tmp_name'];
        $upload_folder="../../../Uploads/";

        $movefile=move_uploaded_file($file_tmp, $upload_folder .$file_name);
        
        if ($movefile) {
            echo "Se movio";
        }else{
            echo "Nokas perro";
        }
     }
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

    <h1>Registrar tipo de documento</h1>

    <form action="#" method="POST">
        <input type="hidden" name="idCategoria" id="id"><br>

        <label for="name">Nombre:</label>
        <input type="text" name="nombreCategoria" id="nombre"><br>

        <label for="name">Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion"><br>

        <input type="file" name="foto" id="">

        <button type="submit" name="bt-enviar" id="bt-enviar" >Registrar</button>
    </form>

    
</body>
</html>