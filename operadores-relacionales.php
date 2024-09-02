<?php

/*

Operadores Relacionales
Igual, ==

No compara tipos, solo valores

Se denota con   ==

$a == $b

Idéntico, ===

Compara tipos y valores

Se denota con ===

Diferentes, ! =, ! ==

! = , no compara tipos,

! ==, compara tipos y valores,

Menor que, <

$a < $b

Mayor que, >

$a > $b

Mayor o Igual que, > =

$a ≥ $b

Menor o Igual que, < =

$a < = $b

Operador de Nave Espacial, < = >

<?php
	echo 2 <=> 1;
	echo "\n";

echo 2 <=> 1; // 1
echo 1 <=> 1; // 0
echo -50 <=> 1 //

    Si el numero de la izquierda es mayor el numero de la derecha, el resultado será 1
    Si el numero de la derecha es igual que el numero de la izquierda , el resultado será 0
    Si el numero de la izquierda es menor que el numero de la derecha, el resultado será 1

Fusión de Null, ??

$edad_pepito = 23;

echo $edad_juanito ?? edad_pepito; 
// Si la edad de Juanito no esta definida, usa la edad de pepito

echo "\n";

*/

/*
Operador	Descripción
==	Igual a
===	Idéntico a
!=	Diferente de
<>	Diferente de
!==	No idéntico a
>	Mayor que
>=	Mayor o igual que
<	Menor que
<=	Menor o igual que
<=>	Nave espacial
??	Fusión de null
*/


$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == Igual
echo "== Igual \n";
var_dump( $a == $b );
var_dump( $a == $b2 );
echo "\n\n";



// === Idéntico
echo "=== Idéntico \n";
var_dump( $a === $b );
var_dump( $a === $b2 );
echo "\n\n";



// != Diferente
echo "!= Diferente \n";
var_dump( $a != $b );
var_dump( $a != $b2 );  //No es diferente, por que no compara tipo
echo "\n\n";

// !== Diferente
echo "!== Diferente \n";
var_dump( $a !== $b );
var_dump( $a !== $b2 );  //Compara tipo
echo "\n\n";

// < Menor que
echo "< Menor que \n";
var_dump( $a < $b );
var_dump( $c < $b );
var_dump( $d < $b );
echo "\n\n";

// > Mayor que
echo "> Mayor que \n";
var_dump( $a > $b );
var_dump( $c > $b );
var_dump( $d > $b );
echo "\n\n";


// >= Mayor o igual que
echo ">= Mayor o igual que \n";
var_dump( $a >= $b );
var_dump( $c >= $b );
var_dump( $d >= $b );
echo "\n\n";

// <= Menor o igual que
echo "<= Menor o igual que \n";
var_dump( $a <= $b );
var_dump( $c <= $b );
var_dump( $d <= $b );
echo "\n\n";


// <=> Nave espacial
echo "<=> Nave espacial \n";
echo 2 <=> 1, "\n"; // 1
echo 1 <=> 1, "\n"; // 0
echo -50 <=> 1, "\n"; // -1
echo "\n\n";

/*

El operador de "nave espacial" (<=>) en PHP también se conoce como el operador de "comparación de tres vías" o "comparación de nave espacial". Este operador se utiliza para comparar dos expresiones. Devuelve 0 si ambas expresiones son iguales, 1 si el lado izquierdo es mayor y -1 si el lado derecho es mayor.

Este tipo de operador también se encuentra en otros lenguajes de programación. Por ejemplo:

    Perl: En Perl, el operador <=> se usa para comparaciones numéricas y devuelve -1, 0 o 1 según si el operando de la izquierda es menor, igual o mayor que el operando de la derecha, respectivamente.
    Ruby: En Ruby, el operador <=> se llama "Spaceship operator" y funciona de manera similar a PHP y Perl, devolviendo -1, 0 o 1 según la relación entre los operandos.
    Swift: En Swift, el operador <=> se llama "Spaceship operator" y se utiliza de manera similar para comparaciones. Devuelve un valor de tipo ComparisonResult que indica la relación entre los valores comparados.
    Perl 6: En Perl 6, este operador se llama "comparador de tres vías" y tiene una funcionalidad similar a otros lenguajes.

Estos son solo algunos ejemplos, pero el concepto de un operador de comparación de tres vías similar al operador de "nave espacial" en PHP se encuentra en varios otros lenguajes de programación. Sin embargo, es importante tener en cuenta que su nombre y sintaxis pueden variar de un lenguaje a otro.

*/






// ?? Fusión de null, define cual es la primer variable
$edad_de_pepito = 23;
echo "?? Fusión de null \n";  
echo $edad_de_juanito ?? $edad_de_pepito ?? $edad_de_jaimito;

echo "\n";

/*

el operador de fusión null "??", toma dos operadores, el primero es la expresión que se evalúa, y el segundo es el valor de respaldo que se utiliza si la expresión es nula. La expresión se evalúa de izquierda a derecha y si la expresión no es nula, se devuelve. Si la expresión es nula, se devuelve el valor de respaldo. Especialmente útil si trabajas con variables que pueden ser nulas y quieres proporcionar un valor predeterminado en lugar de tener que escribir una expresión condicional if/else

por ejemplo:

$valor = $variable ?? "valor de respaldo";

*/