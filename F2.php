<?php

require_once "Monoplaza.php";
require_once "F1.php";

class F2 extends Monoplaza {

    private $superlicencia;

    public function __construct(
        $piloto,
        $nacionalidad,
        $numero,
        $escuderia,
        $superlicencia
    ){

        parent::__construct(
            $piloto,
            $nacionalidad,
            $numero,
            $escuderia
        );

        $this->superlicencia = $superlicencia;
    }

    public function otorgarPuntos($posicion, $vueltaRapida){

        $tabla = [
            1 => 10,
            2 => 8,
            3 => 7,
            4 => 6,
            5 => 5,
            6 => 4,
            7 => 3,
            8 => 2,
            9 => 1
        ];

        if(isset($tabla[$posicion])){
            $this->puntos += $tabla[$posicion];
        }

        if($vueltaRapida && $posicion <= 10){
            $this->puntos++;
        }
    }

    public function subirCategoria($patrocinador){

        return new F1(
            $this->piloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $patrocinador
        );
    }
}
