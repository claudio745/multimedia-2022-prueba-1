<?php
require 'Ejercicio_3.html';
if (empty($_REQUEST['a']) || empty($_REQUEST['b']) || empty($_REQUEST['c']))
{
    $a = 1;
    $b = 1;
    $c = 1;
}
else
{
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];

    $raiz = sqrt(($b**2) - 4*$a*$c);
    $respuesta1 = floatval((-($b) + $raiz)/(2*$a));
    $respuesta2 = floatval((-($b) - $raiz)/(2*$a));
}
if($respuesta1 == $respuesta2)
{
    echo "Ecuacion con solucion unica: x1 = $respuesta1";
}else{
    echo "soluciones de las ecuaciones: <br> x1: $respuesta1 <br> x2: $respuesta2";
}

?>