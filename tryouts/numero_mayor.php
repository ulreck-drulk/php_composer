<?php
function numero_mayor($a ,$b){
    $value = $a <=> $b;
    if ($value == 1) {
        echo "El valor Mas alto es: " . $a . "\n";
    }elseif ($value == -1) {
        echo "El valor Mas alto es: " . $b . "\n";
    }else {
        "Los Valores son identicos!";
    }
    echo $value . "\n";
    
    
    
}

$a = readline("Ingrese el primer Valor: ");
$b = readline("Ingrese el segundo Valor: ");

numero_mayor($a, $b);

// var_dump($a);
// "\n";
// var_dump($b);
// "\n";

// echo $a <=> $b;
// "\n";