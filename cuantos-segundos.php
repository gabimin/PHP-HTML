<?php

$horas = readline("horas: ");
$minutos = readline("minutos: ");
$segundos = readline("segundos: ");

$segundos += ($horas*3600) + ($minutos*60);

echo "El total de segundos son: $segundos";

echo "\n";