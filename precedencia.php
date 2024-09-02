<?php

# Precedencia de operadores en PHP

# ser relaciona con la asociatividad (ver tabla)

$contador = 1;
$resultado = $contador++;

echo "contador" . "\n";
echo $contador . "\n";
echo $resultado . "\n";

# Tiene asociatividad de izquierda:

echo 1 - 2 - 3 - 4;

echo "\n";

# Tiene asociatividad de derecha:

$b = 5;
$c = 10;

$a = $b = $c;

# $a acaba valiendo $c por asociatividad de derecha

# $a = ($b = $c) primero se asigna $c a $b y luego $b a $a

echo $a;

echo "\n";


# TAMBIÉN es un tema de precedencia:

$michis_4_patas = true;
$michis_programa_PHP = false;

$resultado = $michis_4_patas and $michis_programa_PHP;

var_dump( $resultado ); //true

echo "\n";

# por precedencia izquierda se resuelve así:

# ($resultado = $michis_4_patas) and $michis_programa_PHP;
# primero se asigna $michis_4_patas (true) a resultado, y luego se compara
# se asignó un valor true a $resultado antes de comparar, la comparación posterior no cambia la asignación

# Si queremos que dé false tenemos que escribirlo así:

$resultado = ($michis_4_patas and $michis_programa_PHP);
var_dump( $resultado ); //false

echo "\n";

