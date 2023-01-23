<?php
/*Este es un ejemplo de código PHP que define una función llamada "price" (precio).

La función "price" tiene dos parámetros de entrada: "tanka" y "kosu". "tanka" es el precio unitario de un producto y "kosu" es la cantidad de productos comprados.
Dentro de la función, se define una variable llamada "souryo" con el valor 250, que representa un costo adicional de envío.
Luego se calcula el precio total ($ryoukin) utilizando la fórmula $ryoukin = $tanka * $kosu.

Si el precio total es menor a 5000, se suma el costo adicional de envío a $ryoukin.
Finalmente, se utiliza la instrucción "return" para devolver el valor de "ryoukin" como el resultado de la función.

En resumen, esta función recibe como entrada el precio unitario de un producto y la cantidad de productos comprados,
y devuelve el precio total con un costo adicional de envío si es necesario.*/
function price($tanka, $kosu){
    $souryo = 250;
    $ryoukin = $tanka * $kosu;

    if($ryoukin< 5000){
        $ryoukin += $souryo;
    }
    return $ryoukin;
}
?>