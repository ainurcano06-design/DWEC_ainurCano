<?php

require_once "Monoplaza.php";
require_once "F3.php";

class F4 extends Monoplaza {

    private $pais;

    public function __construct(
        $piloto,
        $nacionalidad,
        $numero,
        $escuderia,
        $pais
    ) {

        parent::__construct(
            $piloto,
            $nacionalidad,
            $numero,
            $escuderia
        );

        $this->pais = $pais;
    }

    public function otorgarPuntos($posicion){

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
    }

    public function subirCategoria($academia){

        return new F3(
            $this->piloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $academia
        );
    }
}