<?php

#función para limpiar pantalla dependiendo del sistema operativo:

function clear() {

    if (PHP_OS === "WINNT") #windows
        system("cls");
    else
        system("clear"); #linux o mac

}

$possible_words = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto", "Baldosa", "Terremoto", "Asteroide", "Gallo", "Platzi"];

define("MAX_ATTEMPTS", 6);

echo "😼 ¡Juego del ahorcado! \n\n";

// Inicializamos el juegos
$chosen_word = $possible_words[ rand(0, 9) ];
$chosen_word = strtolower($chosen_word);
$word_length = strlen($chosen_word);
#str_pad() rellena un string con lo que yo le indique
$discovered_letters = str_pad("", $word_length, "_");
$attempts = 0;


do {
    echo "Palabra de $word_length letras \n\n";
    echo $discovered_letters . "\n\n";

    // Pedimos al usuario que escriba
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    if (str_contains($chosen_word, $player_letter) != false) {

        #verificamos todas las ocurrencias de esta letra para reemplazarla  
        #strpos encuentra la posición de la primera ocurrencia de un substring en un string, por eso hacemos un while:

        $offset = 0;
        
        while( 
            ($letter_position = strpos($chosen_word, $player_letter, $offset) )!= false 
            ) {
                $discovered_letters[$letter_position] = $player_letter;
                $offset = $letter_position++;
            }
    }
    else {
        clear();
        # si no adivinó aumentamos el nro de intentos en 1 y ponemos letra incorrecta
        $attempts++;
        echo "Letra incorrecta 😼. Te quedan " . (MAX_ATTEMPTS - $attempts) . " intentos";
        sleep(2);
    }

    clear();

} while ( $attempts < MAX_ATTEMPTS && $discovered_letters != $chosen_word);

clear();

if ($attempts < MAX_ATTEMPTS)
    echo "Felicidades! Adivinaste la palabra. \n\n";
else
    echo "Suerte para la próxima! \n\n";

echo "La palabra es: $chosen_word \n\n";
echo "Descubriste $discovered_letters letras. \n\n";

echo "\n";






echo "\n";