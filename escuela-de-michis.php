<?php

$escuela = array(

    array(
        "Nombre" => "Michijose",
        "Ocupacion" => "Developer increible",
        "Color" => "Naranja con rayitas",
        "Comidas" => array(
            "Favoritas" => "Lasaña, Atun",
            "NoFavoritas" => "Fresas, Cacahuates"
        )
    ),

    array(
        "Nombre" => "Michisancio",
        "Ocupacion" => "jQuery Developer",
        "Color" => "Blanco con manchitas negras",
        "Comidas" => array(
            "Favoritas" => "Pescado, Pollo",
            "NoFavoritas" => "Atun"
        )
    ),

    array(
        "Nombre" => "Mr. Michi",
        "Ocupacion" => "Pro en PHP",
        "Color" => "Blanco",
        "Comidas" => array(
            "Favoritas" => "Pizza",
            "NoFavoritas" => "Pescado"
        )
    ),

);


echo "Las comidas favoritas de " . $escuela[1]['Nombre'] . " son " . $escuela[1]['Comidas']['Favoritas'];

echo "\n";


echo "El color de " . $escuela[2]['Nombre'] . " es " . $escuela[2]["Color"];

echo "\n";