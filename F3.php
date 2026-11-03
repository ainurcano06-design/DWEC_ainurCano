<?php

require_once "Monoplaza.php";
require_once "F2.php";

class F3 extends Monoplaza {

    private $academia;

    public function __construct(
        $piloto,
        $nacionalidad,
        $numero,
        $escuderia,
        $academia
    ){

        parent::__construct(
            $piloto,
            $nacionalidad,
            $numero,
            $escuderia
        );

        $this->academia = $academia;
    }

    public function otorgarPuntos($posicion){

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
    }

    public function subirCategoria($superlicencia){

        return new F2(
            $this->piloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $superlicencia
        );
    }
}