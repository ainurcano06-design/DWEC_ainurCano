<?php

require_once "Monoplaza.php";

class FAcademy extends Monoplaza {

    private $potencia;

    public function __construct(
        $piloto,
        $nacionalidad,
        $numero,
        $escuderia,
        $potencia
    ) {

        parent::__construct(
            $piloto,
            $nacionalidad,
            $numero,
            $escuderia
        );

        $this->potencia = $potencia;
    }

    public function otorgarPuntos($posicion) {

        $tabla = [
            1 => 18,
            2 => 15,
            3 => 12,
            4 => 10,
            5 => 8,
            6 => 6,
            7 => 4,
            8 => 2,
            9 => 1
        ];

        if(isset($tabla[$posicion])){
            $this->puntos += $tabla[$posicion];
        }
    }

    public function subirCategoria($pais){

        return new F4(
            $this->piloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $pais
        );
    }
}