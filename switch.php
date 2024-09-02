<?php

// Michi 1: 9
// Michi 2: 4
// Michi 3: 3
// Michi 4: 9
// Michi 5: 1

$michi = 5;

switch( $michi ){

    case 1:   #sintaxis válida: poner 2 casos con igual valor
    case 4:   #no hay que poner break después del primer caso
        echo "Su numero favorito es el 9";
        break;

    case 2:
        echo "Su numero favorito es el 4";
        break;

    case 3:
        echo "Su numero favorito es el 3";
        break;

    case 5:
        echo "Su numero favorito es el 1";
        break;

    default:
        echo "Ese michi no existe :c";

}

echo "\n";