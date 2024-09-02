<?php

$edades = [18, 22, 40, 34];


#Funciones de Arrays:


# count (cuenta cuántos elementos tiene un arreglo)

echo count($edades);

echo "\n";


# array_push (agrega un elemento al final del arreglo)

array_push($edades, 13);

var_dump($edades);

echo "\n";


# is_array (sirve para saber si una variable es un arreglo)

$esto_no_es_un_arreglo = "";

var_dump( is_array($esto_no_es_un_arreglo));

echo "\n";

var_dump( is_array($edades));

echo "\n";


# explode (convierte un string en un arreglo)

$lista_de_frutas = "fresa,cereza,manzana";

var_dump($lista_de_frutas);

echo "\n";

$lista_de_frutas_array = explode(",", $lista_de_frutas);

var_dump($lista_de_frutas_array);

echo "\n";


// implode (convierte un array en un string)

$lista_de_frutas_array = ["fresa", "cereza", "manzana"];

var_dump($lista_de_frutas_array);

echo "\n";

$lista_de_frutas = implode(",", $lista_de_frutas_array);

var_dump($lista_de_frutas);

echo "\n";