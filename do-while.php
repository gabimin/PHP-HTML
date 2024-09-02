<?php

# la diferencia con while es que el código se ejecuta siempre al menos una vez

$usernames = ["Pepito123", "Mr.Michi", "RetaxMain"];

do {
    
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");

    echo "\n";

} while( in_array($username, $usernames) );

echo "\n";