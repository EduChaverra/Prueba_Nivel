<?php

require_once "Producto.php";

class Objetivo extends Producto {

    private $distanciaFocal;

    public function __construct(string $marca, string $modelo, float $precio, float $valoracion, int $distanciaFocal){
        parent::__construct($marca, $modelo, $precio, $valoracion);
          $this->distanciaFocal = $distanciaFocal;

    }

    public function getDatos(){
        return parent::getDatos() . ", Distancia Focal: $this->distanciaFocal";
    }
}
?>