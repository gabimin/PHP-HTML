<?php

$numerito = 23;

var_dump($numerito);

echo "\n";


$numerito = "23";

var_dump($numerito);

echo "\n";

#aunque suma el string como un integer, no se modifica el string original por haberlo tratado como un integer

$nuevo_numerito = $numerito + 2;

var_dump($nuevo_numerito);
var_dump($numerito);

echo "\n";


$numerito = 10;
$numerito = $numerito + 0.5;

var_dump($numerito);

echo "\n";


# super curioso

/* Si sumo un string y un integer, si el string comienza con un número se podrá sumar pero con una advertencia.
En el caso que el string no comience con un número tendremos un error.*/

$papas = "10 papas en la bolsa";

$cuantas_papas_hay = $papas + 5;


echo $cuantas_papas_hay;

echo "\n";

