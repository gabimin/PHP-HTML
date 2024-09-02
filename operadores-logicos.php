<?php

$michis_felinos =  true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_PHP = false;


// And

var_dump($michis_felinos && $michis_4_patas);

echo "\n";


// Or

var_dump($michis_4_patas || $michis_vuelan);

echo "\n";


// Not

var_dump( !$michis_4_patas );

echo "\n";


// Experimentos que te va a hacer decir waaaaaaaaaaaaat
// Es por la diferencia entre el and por palabras y por símbolos &&

#false
var_dump( $michis_4_patas and $michis_programan_con_PHP );

echo "\n";

#true
$resultado = $michis_4_patas and $michis_programan_con_PHP;

var_dump( $resultado );

echo "\n";

#false
$resultado = $michis_4_patas && $michis_programan_con_PHP;

var_dump( $resultado );

echo "\n";



// Suponiendo estas variables
$es_un_gato_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// ¿Cuál es el resultado?
$es_un_gato_grande && $le_gusta_comer; # 1: true
$es_un_gato_grande || $sabe_volar; # 2: true
$sabe_volar || $tiene_2_patas; # 3: false
!$le_gusta_comer; # 4: false
!$le_gusta_comer || $es_un_gato_grande; # 5: true