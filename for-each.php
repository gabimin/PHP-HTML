<?php
#uno de los ciclos más usados en el backend con las peticiones
$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($tiendita_de_cafes as $cafe => $price)
#no hacen falta llaves porque el código tiene una sola línea:
    echo "El café $cafe cuesta $$price USD \n";


echo "\n";