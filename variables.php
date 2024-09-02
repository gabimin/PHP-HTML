<?php

# variables

$numero_1 = 8;

$numero_2 = 7;

echo $numero_1 + $numero_2;

echo "\n";


# definir constante

define("NUMERO_PI", 3.14);
define("NUMERO_PI", 3);

echo NUMERO_PI;

echo "\n";

# A partir de la version 5.3.0 para definir una constante se puede utilizar la palabra const seguida de el nombre de la constante, es su uso mas común en la actualidad.

const ALPHA = 4;

echo ALPHA;

echo "\n";


/*

Una joya que nos trae Chat GPT:

En PHP, puedes definir una constante utilizando la función define() o, a partir de PHP 7.0, utilizando la palabra clave const. Ambos métodos son ampliamente aceptados, pero hay algunas diferencias clave entre ellos. A continuación, te mostraré ambas formas y algunas consideraciones para elegir la mejor práctica según tu situación:

Utilizando define():

php Copy code define('MI_CONSTANTE', 'Mi valor constante'); Consideraciones:

Las constantes definidas con define() son globales y se pueden utilizar en cualquier lugar del script. Puedes definir constantes con nombres dinámicos si lo necesitas, lo que puede ser útil en ciertas situaciones. Ejemplo de nombre dinámico:

php Copy code $nombre = 'MI_CONSTANTE'; define($nombre, 'Mi valor constante'); Utilizando const (a partir de PHP 7.0):

php Copy code const MI_CONSTANTE = 'Mi valor constante'; Consideraciones:

Las constantes definidas con const están asociadas a la clase o namespace en el que se declaran. Son más locales y no son globales como las definidas con define(). No se pueden definir constantes con nombres dinámicos usando const. Entonces, ¿cuál es la mejor práctica? Depende de tu caso de uso:

Si necesitas una constante global que pueda ser accesible en cualquier parte de tu aplicación, define() podría ser la elección adecuada.

Si estás trabajando en un entorno orientado a objetos y deseas definir constantes específicas de una clase o namespace, const es más apropiado.

En general, se recomienda utilizar const cuando sea posible, ya que ofrece un mejor encapsulamiento y evita posibles conflictos de nombres. Sin embargo, si necesitas constantes globales, define() sigue siendo una opción válida.

*/