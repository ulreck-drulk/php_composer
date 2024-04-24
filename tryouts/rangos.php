<?php
function rangos($a ,$b){
   
    
    if ($b<$a) {
        echo "El numero esta dentro del limite! \n";
        echo "Gracias \n";
    } elseif ($b>$a) {
        echo "El numero No esta dentro del limite! \n";
        $b = readline("Por favor defina un nuevo valor dentro del limite ");
        rangos($a, $b);
    }else{
        echo "Estos Numeros son iguales!";
    }
    
    
    
}

$a = readline("Ingrese el valor de limite ");
$b = readline("Ingrese el valor dentro del limite establecido: ");

rangos($a, $b);

// var_dump($a);
// "\n";
// var_dump($b);
// "\n";

// echo $a <=> $b;
// "\n";