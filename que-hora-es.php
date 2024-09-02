<?php

$segundos = readline("Ingresa el tiempo en segundos: ");

# por la precedencia hay que poner los paréntesis: para evitar que asigne los enteros antes de dividir o sacar el resto. Con los paréntesis forzamos la precedencia de la operación a la asignación



$horas = (int) ($segundos / 3600);
$segundos = (int) ($segundos % 3600);
$minutos = (int) ($segundos / 60);
$segundos = (int) ($segundos % 60);

echo "Son $horas horas, $minutos minutos y $segundos segundos.";

echo "\n";