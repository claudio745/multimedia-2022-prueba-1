<?php
    require_once('conexion.php');
    if(empty($_POST['titulo']) || empty($_POST['cuerpo']) || empty($_POST['categoria']) || empty($_POST['autor']))
    {
        echo "Por favor llene todos los campos";
    }
    else
    {
        $titulo = $_POST['titulo'];
        $cuerpo = $_POST['cuerpo'];
        $imagen =addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $categoria = $_POST['categoria'];
        $autor = $_POST['autor'];
        $query = "INSERT INTO noticias (titulo, cuerpo, categoria, imagen, autor) VALUES ('$titulo', '$cuerpo', '$categoria', '$imagen', '$autor')";
        $resultado = $conexion->query($query);
        if($resultado)
        {
            echo "Se han ingresado los datos correctamente";
        }
        else
        {
            echo "No se han ingresado los datos";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href = style.css> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingrese datos de la noticia </h1>
    <form  method= "POST" enctype = "multipart/form-data"> 
            <label for="titulo"> Titulo de la noticia: </label>
            <input type="text" name="titulo" id="titulo">
            <br><br>
            <label for="cuerpo"> Cuerpo de la noticia: </label>
            <input type="text" name="cuerpo" id="cuerpo">
            <br><br>
            <label> Foto: </label>
            <input type = "file" name = "imagen">
            <br><br>
            <label for="categoria"> Categoria de la noticia: </label>
            <input type="text" name="categoria" id="categoria">
            <br><br>
            <label for="autor"> Autor de la noticia: </label>
            <input type="text" name="autor" id="autor">
            <br><br>
            <input type="submit" value="Enviar formulario">
            <a target="_blank" class="fcc-btn" href="mostrar.php">Mostrar noticias</a>  
            
        </form>
</body>
</html>