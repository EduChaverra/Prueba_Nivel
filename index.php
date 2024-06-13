<?php

require_once "Camara.php";
require_once "Objetivo.php";

$camara1 = new Camara("Canon", "PowerShot G7 X Mark II", 649.99, 4.5, 20, TipoDeCamara::COMPACTA);
$camara2 = new Camara("Nikon", "Coolpix B600", 329.99, 4.3, 16, TipoDeCamara::PUENTE);
$camara3 = new Camara("Sony", "Alpha a6000", 548.00, 4.7, 24, TipoDeCamara::LENTE_DESMONTABLE, new Objetivo("sony","Zoom",200,2.5,18));
$camara4 = new Camara("Olympus", "OM-D E-M10 Mark IV", 699.99, 4.6, 20, TipoDeCamara::LENTE_DESMONTABLE);
/*$camara1 = new Camara("Canon", "PowerShot G7 X Mark II", 649.99, 4.5, 20, TipoDeCamara::COMPACTA,new Objetivo("nikkor", "x", 200, 3, 50)); 
prueba para ver si da error crear una camara que no necesita objetivo*/ 

$camaras = [$camara1,$camara2,$camara3,$camara4];

$objetivo1 = new Objetivo("nikkor", "x", 200, 3, 50);
$objetivo2 = new Objetivo("canon", "y", 300, 4, 35);
$objetivo3 = new Objetivo("sigma", "z", 400, 4.5, 24);
$objetivo4 = new Objetivo("fuji", "a", 500, 3.5, 105);
   
$objetivos = [$objetivo1,$objetivo2,$objetivo3,$objetivo4];

function encontrarCamaraMasBarata($camaras){
    $camaraMenorPrecio = $camaras[0];
    foreach($camaras as $camara){
        if ($camara->getPrecio() < $camaraMenorPrecio->getPrecio()){
            $camaraMenorPrecio = $camara;
        }
    }
    return $camaraMenorPrecio;
}

function encontrarObjetivoMejorValorado($objetivos){
    $objetivoMejorValorado = $objetivos[0];
    foreach($objetivos as $objetivo){
        if ($objetivo->getValoracion() > $objetivoMejorValorado->getValoracion()){
            $objetivoMejorValorado = $objetivo;
        }   
    }
    return $objetivoMejorValorado;
}

function mediaValoracionCamaras($camaras){
    $precioTotal = 0;
    foreach($camaras as $camara){
        $precioTotal += $camara->getPrecio();
    }
    return $precioTotal / count($camaras);
}

$x = encontrarCamaraMasBarata($camaras);
echo $x->getPrecio() . "<br>";

$y = encontrarObjetivoMejorValorado($objetivos);
echo "puntuacion: " . $y->getValoracion() . ", " . $y->getMarca() . ", " . $y->getModelo();

$media = mediaValoracionCamaras($camaras);
echo "<br>" . round($media,2);
?>