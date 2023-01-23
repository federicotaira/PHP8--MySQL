<?php
/*Este código crea una función llamada "myFunc" que tiene la capacidad de recibir un número arbitrario de argumentos. Dentro de la función, se utilizan las funciones "func_get_args()" y "func_num_args()" para obtener una lista de todos los argumentos y el número de argumentos, respectivamente, que se pasaron a la función.

Luego, se calcula la suma total de todos los argumentos utilizando la función "array_sum()" y se almacena en la variable "$total". A continuación, se calcula el promedio de todos los argumentos dividiendo la suma total entre el número de argumentos y se almacena en la variable "$average".

Por último, se utiliza la función "func_get_arg()" para obtener el último argumento pasado a la función y se almacena en la variable "$lastValue".

Si no se pasaron argumentos a la función, se establece en "（データ無し)" a las variables "$lastValue", "$average" y "$total".

Finalmente, se imprimen en pantalla el total, el promedio y el último argumento.*/
function myFunc(){
    $allArgs = func_get_args();
    $total = array_sum($allArgs);
    $numArgs = func_num_args();
    
    if($numArgs>0){
        $average = $total / $numArgs;
        $lastValue = func_get_arg($numArgs - 1);
    }else {
        $lastValue = $average = $total = "（データ無し)";
    }
    echo "合計点", $total, PHP_EOL;
    echo "平均点", $average, PHP_EOL;
    echo "最後の点数", $lastValue, PHP_EOL;
}
myFunc(42, 67, 55, 75);
?>