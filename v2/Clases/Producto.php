<?php

class Producto{
    protected $marca;
    protected $modelo;
    protected $puntuacion;
    protected $precio;

    public function __construct(string $marca, string $modelo, float $precio, float $puntuacion)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->puntuacion = $puntuacion;
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

    public function getPuntuacion(){
        return $this->puntuacion;
    }
    

    public function __toString(){
        return "Objetivo: {$this->marca} {$this->modelo}, Precio: {$this->precio}, Puntuación: {$this->puntuacion}";
    }
}

?>