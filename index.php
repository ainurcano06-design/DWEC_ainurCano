<?php

require_once "clases/FAcademy.php";
require_once "clases/F4.php";
require_once "clases/F3.php";
require_once "clases/F2.php";
require_once "clases/F1.php";

$piloto = new F4(
    "Carlos Sainz",
    "España",
    55,
    "Ferrari Academy",
    "España"
);

$piloto->otorgarPuntos(1);

echo "Puntos: " . $piloto->getPuntos();
