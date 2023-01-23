<?php
//este código define una función en PHP que divide una cantidad total entre un número de personas y utiliza echo para imp
function warikan($total, $ninzu){ // dos parámetros de entrada: "total" es la cantidad total a dividir y "ninzu" es el número de personas entre las que se va a dividir.
    if($ninzu<=0){ //Dentro de la función, se realiza una comprobación para verificar si el número de personas es menor o igual a cero, 
       return;     //en caso de serlo, la función finaliza sin realizar ninguna operación.
    }

    $result = $total / $ninzu; //En caso contrario, se calcula el resultado de la división utilizando la fórmula $result = $total / $ninzu,
    echo "{$total}円を{$ninzu}人で分てると{$result}円。"; //Se utiliza echo para imprimir el resultado de la división en una cadena de texto con un formato específico.
    echo "<br>" . PHP_EOL;
}
//Por último, se llama a la función 3 veces con diferentes valores para el total y el número de personas.
warikan(2500, 2); 
warikan(3000, 0);
warikan(5500, 4);
?>