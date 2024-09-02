<?php

// echo "pipi \n";

$nombre = "Gabi";

$apellido = "Min";


// echo "No, no. Yo me llamo " . $nombre ." ". $apellido.  "\n";

// Forma más fácil de concatenar:

echo "No, no. Yo me llamo $nombre $apellido \n";

echo "El resultado de  4 x 5 es " . (4 * 5) . "\n";

// Un spoiler que SOLO sirve a modo educativo. Si en el "echo" en vez de un texto, envias una cadena Json, estarias publicando tu primera API 😉
// Si NO se usan variables en el texto, se recomienda usar comilla sencilla, pues, PHP se prepara para variables al usar comillas dobles.

$personas = [
    "Gabi" => 27,
    "Fran" => 30,
    "Ani" => 28
];

var_dump( $personas );

print_r( $personas );

echo "\n";


// Esto es un comentario de una sola línea

# Esto es otro comentario de una sola línea

/*

Este es un enorme comentario multilínea
ocupa varias líneas

*/