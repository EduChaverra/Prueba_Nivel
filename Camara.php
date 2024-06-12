<?php

require_once "Producto.php";

class Camara extends Producto{

    private $pixels;

    public function __construct(string $marca, string $modelo, float $precio, float $valoracion, int $pixels){
       parent::__construct($marca, $modelo, $precio, $valoracion);
        $this->pixels = $pixels;
    }

    public function getDatos(){
        return parent::getDatos() . ", Pixels: $this->pixels";
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getValoracion(){
        return $this->valoracion;
    }

    public function getPixels(){
        return $this->pixels;
    }
}

?>