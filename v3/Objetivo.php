<?php

enum TipoDeObjetivo:string{
    case GRAN_ANGULAR="Gran angular";
    case TELEOBJETIVO="Teleobjetivo";
    case OJO_DE_PEZ = "Ojo de pez";
    case MACRO = "Macro";
}

class Objetivo{
    private string $nombre;
    private TipoDeObjetivo $tipoDeObjetivo;
    private float $precio;
    private int $distanciaFocal;
    private float $apertura;

    public function __construct(string $nombre, TipoDeObjetivo $tipoDeObjetivo, float $precio, int $distanciaFocal, float $apertura){
        $this->nombre = $nombre;
        $this->tipoDeObjetivo = $tipoDeObjetivo;
        $this->precio = $precio;
        $this->distancia_focal= $distanciaFocal;
        $this->apertura = $apertura;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getTipoDeObjetivo(){
        return $this->tipoDeObjetivo->value;
    }
    public function getprecio(){
        return $this->precio;
    }
    public function getDistanciaFocal(){
        return $this->distancia_focal;
    }
    public function getApertura(){
        return $this->apertura;
    }
}

?>