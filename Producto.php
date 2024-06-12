<?php

class Producto {
    protected $marca;
    protected $modelo;
    protected $precio;
    protected $valoracion;

    public function __construct(string $marca, string $modelo, float $precio, float $valoracion){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->valoracion = $valoracion;
    }

    public function getDatos(){
        return "Marca: $this->marca, Modelo: $this->modelo, Precio: $this->precio, Valoracion: $this->valoracion";
    }
}

?>