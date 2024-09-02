<?php

#array unpacking

$arreglo1 = [1, 2, 3];
$arreglo2 = [4, 5, 6];

$resultado = [...$arreglo1, ...$arreglo2];

var_dump($resultado);

function suma($a, $b) {
    echo "La suma de $a + $b es: " . $a + $b . "\n";
    }

$numeros = [1, 2];
$numeros2 = [50, 20];
$numeros3 = [10000, 2];

# al poner ... del array unpacking los números se distribuyen en los parámetros de la función suma

suma(...$numeros);
suma(...$numeros2);
suma(...$numeros3);