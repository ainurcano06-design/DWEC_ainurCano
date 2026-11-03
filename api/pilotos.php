<?php
//Guarda la URL de la API para obtener los datos del piloto 16
$url16 = "https://api.openf1.org/v1/drivers?driver_number=16";
//Guarda la URL del piloto 44
$url44 = "https://api.openf1.org/v1/drivers?driver_number=44";

//file_get_contents obtiene la respuesta de la API, llega en formato
//JSON y json_decode convierte el JSON en un array de PHP
$piloto16 = json_decode(file_get_contents($url16), true);
$piloto44 = json_decode(file_get_contents($url44), true);

echo "<h2>Piloto 16</h2>";
print_r($piloto16);
//Muestra un titulo y imprime todo el contenido del array para ver los datos recibidos (piloto16)

echo "<h2>Piloto 44</h2>";
print_r($piloto44);
//Muestra un titulo y imprime todo el contenido del array para ver los datos recibidos(piloto44)
