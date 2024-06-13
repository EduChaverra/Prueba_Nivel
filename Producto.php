<?php

class Producto {
    protected string $marca;
    protected string $modelo;
    protected float $precio;
    protected float $valoracion;

    public function __construct(string $marca, string $modelo, float $precio, float $valoracion){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->valoracion = $valoracion;
    }

    public function getDatos(){
        return "Marca: $this->marca, Modelo: $this->modelo, Precio: $this->precio, Valoracion: $this->valoracion";
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

}

?>