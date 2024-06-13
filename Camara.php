<?php

require_once "Producto.php";

enum TipoDeCamara : string{
    case COMPACTA = 'Compacta';
    case PUENTE = 'Puente';
    case LENTE_DESMONTABLE = 'Lente Desmontable';
}

class Camara extends Producto{

    private int $pixels;
    private TipoDeCamara $tipo;
    private ?Objetivo $objetivo;


    public function __construct(string $marca, string $modelo, float $precio, float $valoracion, int $pixels, TipoDeCamara $tipo, ?Objetivo $objetivo = null) {
        parent::__construct($marca, $modelo, $precio, $valoracion);
        $this->pixels = $pixels;
        $this->tipo = $tipo;
        
        if ($objetivo !== null && $this->llevaObjetivo()) {
            $this->objetivo = $objetivo;
        } else if ($objetivo !== null && !$this->llevaObjetivo()) {
            throw new InvalidArgumentException("Este tipo de cámara no soporta un objetivo.");
        } else {
            $this->objetivo = null;
        }
    }

    public function getDatos(){
        return parent::getDatos() . ", Pixels: $this->pixels";
    }

    public function getPixels(){
        return $this->pixels;
    }

    public function llevaObjetivo(){
        if ($this->tipo === TipoDeCamara::LENTE_DESMONTABLE) {
            return true;
        }
        return false;
    }
}

?>