<?php

require_once "Producto.php";
require_once "Objetivo.php";

enum TipoDeCamara: string{
    case COMPACTA="compacta";
    case PUENTE="puente";
    case OBJETIVO_DESMONTABLE="objetivo_desmontable";
}

class Camara extends Producto{

    private $pixels;
    private $tipoDeCamara;
    private $objetivos=[];

    public function __construct(string $marca, string $modelo, float $precio, float $puntuacion,float $pixels,TipoDeCamara $tipoDeCamara = null,?array $objetivos = [])
    {
        parent::__construct($marca,$modelo,$precio,$puntuacion);
        $this->pixels = $pixels;
        $this->tipoDeCamara = $tipoDeCamara;
        $this->objetivos = $objetivos;
    }

    public function getPixels(){
        return $this->pixels;
    }

    public function getTipoDeCamara(){
        return $this->tipoDeCamara;
    }

    public function getObjetivos(){
        return $this->objetivos;
    }

    public function __toString(): string {
        $objetivosStr = "";
        if ($this->tipoDeCamara->value != "objetivo_desmontable"){
            $objetivosStr = null;
        } else {
        $objetivosStr = implode(", ", array_map(function($obj) {
            return (string) $obj;
        }, $this->objetivos));
        }

        return "Cámara: {$this->marca} {$this->modelo}, Puntuación: {$this->puntuacion}, Precio: {$this->precio}, Pixels: {$this->pixels}, Tipo: {$this->tipoDeCamara->value}, Objetivos: [{$objetivosStr}]";
    }

    public function addObjetivo(Objetivo $objetivo){
        $this->objetivos[] = $objetivo;
    }
    
}

?>
