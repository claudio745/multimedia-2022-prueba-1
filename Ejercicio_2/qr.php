<?php
    require 'phpqrcode/qrlib.php';
    $filename= 'test.png';
    if (empty($_POST['Nombre']) || empty($_POST['Apellido'])){
        echo "Por favor llene los campos correspondientes";
    }else{
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $tamanio = 10;
        $level = 'M';
        $framesize = 3;
        $contenido = $nombre . $apellido;
        QRcode::png($contenido, $filename, $level, $tamanio, $framesize);  
        echo '<img src="'.$filename.'"/>';
        echo "Contenido:    ";
        echo $nombre;
        echo " ";  
        echo $apellido;
    }
     
?>