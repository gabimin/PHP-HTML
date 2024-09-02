<?php
//calculo de la serie de fibonacci 

$pos = readline("Position: ");
$anterior = 0;
$actual = 1;

for ($i = 1; $i <= $pos; $i++) {
    $temp = $actual;
    $actual += $anterior;
    $anterior = $temp;
    echo $i . ": " . $actual . "\n";
}



