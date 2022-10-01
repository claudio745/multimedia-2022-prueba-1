<?php
    require 'qr.php';
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
    <h1>Ingrese sus datos </h1>
    <form  method= "POST" > 
            <label for="Nombre"> Nombre: </label>
            <input type="text" name="Nombre" id="Nombre">
            <br><br>
            <label for="Apellido"> Apellido: </label>
            <input type="text" name="Apellido" id="Apellido">
            <br><br>
            <input type="submit" value="Enviar formulario">
        </form>
</body>
</html>
