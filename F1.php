<?php

require_once "Monoplaza.php";

class F1 extends Monoplaza {

    private $patrocinador;

    public function __construct(
        $piloto,
        $nacionalidad,
        $numero,
        $escuderia,
        $patrocinador
    ){

        parent::__construct(
            $piloto,
            $nacionalidad,
            $numero,
            $escuderia
        );

        $this->patrocinador = $patrocinador;
    }

    public function otorgarPuntos($posicion, $vueltaRapida){

        $tabla = [
            1 => 25,
            2 => 18,
            3 => 15,
            4 => 12,
            5 => 10,
            6 => 8,
            7 => 6,
            8 => 4,
            9 => 2,
            10 => 1
        ];

        if(isset($tabla[$posicion])){
            $this->puntos += $tabla[$posicion];
        }

        if($vueltaRapida && $posicion <= 10){
            $this->puntos++;
        }
    }
}