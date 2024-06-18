<?php

require_once "Objetivo.php";

 $objetivo1 = new Objetivo("Sigma", TipoDeObjetivo::TELEOBJETIVO, 200, 120, 4);
 $objetivo2 = new Objetivo("Nikkor", TipoDeObjetivo::OJO_DE_PEZ, 300, 11, 3);
 $objetivo3 = new Objetivo("Sigma", TipoDeObjetivo::MACRO, 400, 50, 2.5);
 $objetivo4 = new Objetivo("Canon", TipoDeObjetivo::GRAN_ANGULAR, 500, 18, 1.5);

 $objetivos = [$objetivo1,$objetivo2,$objetivo3,$objetivo4];

 function ObjetivoMasBarato($objetivos){
    $objetivoMasBarato = $objetivos[0];
    foreach($objetivos as $objetivo){
        if($objetivo->getPrecio() < $objetivoMasBarato->getPrecio()){
            $objetivoMasBarato = $objetivo;
        }
        return $objetivoMasBarato;
    }
}   

 function Teleobjetivos($objetivos){
    foreach($objetivos as $objetivo){
        if($objetivo->getTipoDeObjetivo() == TipoDeObjetivo::TELEOBJETIVO){
            echo $objetivo->getTipoDeObjetivo();
        }
    }
 }   

$objetivoBarato = ObjetivoMasBarato($objetivos);
echo $objetivoBarato->getNombre();

 


?>