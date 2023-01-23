<?php
/*Este código es un ejemplo de cómo utilizar la función "fee" para calcular el precio total a pagar por un cierto número de adultos y niños.
 En este caso, se está utilizando la sintaxis de array asociativo para pasar los argumentos a la función.

En la primera línea, se está asignando el valor de retorno de la función "fee" a la variable $total, pasando los argumentos "child: 2" y "adult: 1" en ese orden. 
Los valores asignados a estos argumentos representan 2 niños y 1 adulto, respectivamente.*/
function fee($adult=0, $child=0){
    $adult_fee = 1000 * $adult;
    $child_fee = 600 * $child;
    $fee = $adult_fee + $child_fee;
    return $fee;
}
?>

<?php
$total = fee(child: 2, adult: 1);
echo "子供2人、大人1人の料金: ";
echo "{$total}円". "<br>";
?>

<?php
$total = fee(child: 1);
echo "子供1人の料金: ";
echo "{$total}円";
?>