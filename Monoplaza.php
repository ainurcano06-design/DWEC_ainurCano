<?php

class Monoplaza {

    protected $piloto;
    protected $nacionalidad;
    protected $numero;
    protected $escuderia;
    protected $puntos;

    public function __construct(
        $piloto,
        $nacionalidad,
        $numero,
        $escuderia,
        $puntos = 0
    ) {
        $this->piloto = $piloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
    }

    public function mostrarDatos() {

        echo "Piloto: " . $this->piloto . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Número: " . $this->numero . "<br>";
        echo "Escudería: " . $this->escuderia . "<br>";
        echo "Puntos: " . $this->puntos . "<br>";
    }

    public function getPuntos() {
        return $this->puntos;
    }
}