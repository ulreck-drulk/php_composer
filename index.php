<?php
require __DIR__. '/vendor/autoload.php';
$texto = readline("Escribe tu nombre en minusculas: ");
//echo Text\format::upperText($texto)."\n"; Esto lo hace ahora composer
echo upper($texto);
//Se llama la funcion que esta disponible en los helpers creados
echo lower($texto);