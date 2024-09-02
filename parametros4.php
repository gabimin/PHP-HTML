<?php

# permite la suma de infinitos parámetros
# con ... adelante $params se convierte en un arreglo

function suma_infinita(...$params) {

    var_dump($params);
    
    $suma = 0;
    
    foreach ($params as $numero) {
        $suma += $numero;
    }

    echo "La sumatoria es: $suma \n";

}

suma_infinita(1, 2);
suma_infinita(1, 2, 3);
suma_infinita(100, 40, 2, 9, 3);

echo "\n";