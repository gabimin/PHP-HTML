<?php

/*
Operadores Aritméticos

    Adición ⇒ +
    Sustracción ⇒ -
    Multiplicación ⇒ *
    División ⇒ /
    Modulo ⇒ % ⇒ Se usa para conocer el residuo de una división ⇒ $a % $b
    Potenciación ⇒ ** ⇒ $a ** $b
    Identidad ⇒ Sirve para convertir un string a un int o float, según sea el caso ⇒ + ⇒ +$a
    Negación ⇒ Convierte un numero positivo a negativo ⇒ -$a

*/

echo 5 + 5;

echo "\n";


$resultado = 5 - 3;

echo $resultado;

echo "\n";


echo (5 * 6) . " " . (80 / 4);

echo "\n";


echo 5 % 2;

echo "\n";


echo "7208 segundos convertidos a horas son " . (int)(7208 / 3600) . " horas. ";
echo "Sobran " . (7208 % 3600) . " segundos.";
echo "\n";