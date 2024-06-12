<?php

require_once "Camara.php";
require_once "Objetivo.php";

$camara1 = new Camara("nikon", "d50", 500, 3.5, 24);
$camara2 = new Camara("canon", "20", 600, 2.5, 20);
$camara3 = new Camara("panasonic", "40", 700, 3, 18);
$camara4 = new Camara("fuji", "xt30", 1000, 5, 20);

$camaras = [$camara1,$camara2, $camara3, $camara4];

$objetivo1 = new Objetivo("nikkor", "x", 200, 3, 50);
$objetivo2 = new Objetivo("canon", "y", 300, 4, 35);
$objetivo3 = new Objetivo("sigma", "z", 400, 4.5, 24);
$objetivo4 = new Objetivo("fuji", "a", 500, 3.5, 105);

$objetivos = [$objetivo1, $objetivo2, $objetivo3, $objetivo4];

function encontrarCamaraMasBarata($camaras){
    $camaraMenorPrecio = $camaras[0];
    foreach($camaras as $camara){
        if ($camara->getPrecio() < $camaraMenorPrecio->getPrecio()){
            $camaraMenorPrecio = $camara;
        }
    }
    return $camaraMenorPrecio;
}

function encontrarCamaraMejorValorada($objetivos){
    $objetivoMejorValorado = $objetivos[0];
    foreach($objetivos as $objetivo){
        if ($objetivo->getValoracion() > $objetivoMejorValorado->getValoracion()){
            $objetivoMejorValorado = $objetivo;
        }   
    }
    return $camaraMejorValorada;
}

$x = encontrarCamaraMasBarata($camaras);
echo "La camara mas barata es la : $x->getMarca() . ", " . $x->getModelo()";

$mejorCamara = encontrarCamaraMejorValorada($objetivos);
echo $mejor->getDatos()
?>