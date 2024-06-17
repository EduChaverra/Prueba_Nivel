<?php

require_once "Objetivo.php";
require_once "Camara.php";

$camara1 = new Camara("Canon", "PowerShot G7 X Mark II", 649.99, 4.5, 20, TipoDeCamara::COMPACTA);
$camara2 = new Camara("Nikon", "Coolpix B600", 329.99, 4.3, 16, TipoDeCamara::PUENTE);
$camara3 = new Camara("Sony", "Alpha a6000", 548.00, 4.7, 24, TipoDeCamara::OBJETIVO_DESMONTABLE);
$camara4 = new Camara("Olympus", "OM-D E-M10 Mark IV", 699.99, 4.6, 20, TipoDeCamara::OBJETIVO_DESMONTABLE);

$camaras = [$camara1,$camara2,$camara3,$camara4];

$objetivo1 = new Objetivo("nikkor", "x", 3, 200, 50);
$objetivo2 = new Objetivo("canon", "y", 4, 300, 35);
$objetivo3 = new Objetivo("sigma", "z", 4.5, 400, 24);
$objetivo4 = new Objetivo("fuji", "a", 3.5, 500, 105);
   
$objetivos = [$objetivo1,$objetivo2,$objetivo3,$objetivo4];

$camara3->addObjetivo($objetivo3);
$camara3->addObjetivo($objetivo4);

function encontrarCamaraMasBarata($camaras){
    $camBarata = $camaras[0];
    foreach($camaras as $camara){
        if($camara->getPrecio() < $camBarata->getPrecio()){
            $camBarata = $camara;
        }
    }
    return $camBarata;
}

function mediaPuntuacionesObjetivos($objetivos){
    $sumaPuntucaciones = 0;
    foreach($objetivos as $objetivo){
        $sumaPuntucaciones += $objetivo->getPuntuacion();
    }
    return $sumaPuntucaciones / count($objetivos);
}

function mostrarCamaras($camaras){
    foreach($camaras as $camara){
        echo $camara . "<br>";
    }
}

function mostrarCantObjetivosPorCamara($camaras){
    foreach($camaras as $camara){
       echo "La camara " . $camara->getMarca() ." ". $camara->getModelo() . ", tiene " .(count($camara->getObjetivos())) . " objetivos<br>";
    }
}

function promedioPrecioCamaras($camaras){
    $sumaPrecios = 0;
    foreach($camaras as $camara){
        $sumaPrecios += $camara->getPrecio();   
    }
    return $sumaPrecios / count($camaras);
}

function camMejorPuntuacion($camaras){
    $camMejorPuntuada = $camaras[0];
    foreach($camaras as $camara){
      if($camara->getPuntuacion() > $camMejorPuntuada->getPuntuacion())
      $camMejorPuntuada = $camara;
    }
    return $camMejorPuntuada;
}

$camMasBarata = encontrarCamaraMasBarata($camaras);
echo "La camara mas barata es la ". $camMasBarata->getMarca() . " " . $camMasBarata->getModelo(). ", con un precio de " . $camMasBarata->getPrecio()."€ <br><br>";

$mediaPuntuacionesObjetivos = mediaPuntuacionesObjetivos($objetivos);
echo "La media de la puntuacionde los objetivo es: " . $mediaPuntuacionesObjetivos . "<br><br>";

$infoCamaras = mostrarCamaras($camaras);
echo $infoCamaras . "<br><br>";

$cantidadObjetivosPorCamara = mostrarCantObjetivosPorCamara($camaras);
echo $cantidadObjetivosPorCamara . "<br><br>";

$promedioPreciosCamaras = promedioPrecioCamaras($camaras);
echo "El promedio de los precios de las camaras es: " . $promedioPreciosCamaras . "<br><br>";

$camMejorPuntuada = camMejorPuntuacion($camaras);
echo "La camara mejor puntuada es la " . $camMejorPuntuada->getMarca() . " " . $camMejorPuntuada->getModelo() . "<br><br>";

?>