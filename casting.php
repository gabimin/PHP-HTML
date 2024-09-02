<?php

// El casting en PHP se refiere a la conversión de un tipo de dato a otro.

// Se puede hacer de forma explícita utilizando funciones de casting o de forma implícita mediante operaciones o asignaciones

// Ej: se puede convertir una variable de tipo string a int utilizando la función (int).

// El casting es útil cuando se necesita realizar operaciones o comparaciones entre diferentes tipos de datos.

# string

$numerito = "5";

var_dump($numerito);

echo "\n";

# fuerza un string a convertirse en int

$numerito = (int)$numerito;

var_dump($numerito);

echo "\n";


# float

$dias = 5.89;

var_dump($dias);

echo "\n";


# fuerza a un float a convertirse en int

$dias = (int)$dias;

var_dump($dias);

echo "\n";


# booleano

$banderita = false;

var_dump( $banderita );

echo "\n";


# fuerza a un int 0 a convertirse en booleano false

$banderita = 0;

var_dump( $banderita );

echo "\n";

$banderita = (bool) $banderita;

var_dump( $banderita );

echo "\n";

# fuerza a cualquier int a convertirse en booleano (true)

$banderita = 234;

var_dump( $banderita );

echo "\n";

$banderita = (bool) $banderita;

var_dump( $banderita );

echo "\n";


# fuerza a string vacío a convertirse en booleano (false)

$banderita = "";

var_dump( $banderita );

echo "\n";

$banderita = (bool) $banderita;

var_dump( $banderita );

echo "\n";
