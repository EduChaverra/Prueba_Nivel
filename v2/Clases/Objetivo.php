<?php

require_once "Producto.php";

class Objetivo extends Producto{
    private $distancia_focal;

    public function __construct(string $marca, string $modelo, float $puntuacion, float $precio, int $distancia_focal)
    {
        parent::__construct($marca,$modelo,$puntuacion,$precio);
        $this->distancia_focal = $distancia_focal;
    }

    public function getDistanciaFocal(){
        return $this->distancia_focal;
    }

    public function __toString(){
        return "Objetivo: {$this->marca} {$this->modelo}, Puntuación: {$this->puntuacion}, Precio: {$this->precio}, Distancia Focal: {$this->distancia_focal}";
    }
}

?>