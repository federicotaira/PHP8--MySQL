<?php
/*Este es un ejemplo de código PHP que utiliza un bucle for para generar una serie de números aleatorios.

El bucle for se ejecuta desde 1 hasta 10. En cada iteración, se utiliza la función mt_rand() para generar un número aleatorio entre 1 y 100. El resultado se almacena en la variable $num.

Luego, se utiliza echo para imprimir el valor actual de $num seguido de una coma y un espacio.

En resumen, este código genera 10 números aleatorios entre 1 y 100 y los imprime en la pantalla separados por comas.*/ 
for($i=1; $i<=10; $i++){
    $num = mt_rand(1, 100);
    echo "{$num}, ";
}
?>
