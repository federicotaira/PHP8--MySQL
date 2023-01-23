<?php
/*Este es un ejemplo de código PHP que utiliza la función round() para redondear un número con decimales utilizando diferentes modos de redondeo.

Se utiliza la función round() en 4 ocasiones:

$num1 = round(1.5, 0, PHP_ROUND_HALF_UP); redondea el número 1.5 al entero más grande.
$num2 = round(1.5, 0, PHP_ROUND_HALF_DOWN); redondea el número 1.5 al entero más pequeño.
$num3 = round(2.5, 0, PHP_ROUND_HALF_EVEN); redondea el número 2.5 al número par más cercano.
$num4 = round(2.5, 0, PHP_ROUND_HALF_ODD); redondea el número 2.5 al número impar más cercano.
Por último se utiliza var_dump() para imprimir el valor y el tipo de cada una de las variables $num1, $num2, $num3 y $num4.

En resumen, este código redondea el número 1.5 y el 2.5 utilizando diferentes modos de redondeo y muestra los resultados.
*/
$num1 = round(1.5, 0, PHP_ROUND_HALF_UP);
$num2 = round(1.5, 0, PHP_ROUND_HALF_DOWN);
$num3 = round(2.5, 0, PHP_ROUND_HALF_EVEN);
$num4 = round(2.5, 0, PHP_ROUND_HALF_ODD);

var_dump($num1);
var_dump($num2);
var_dump($num3);
var_dump($num4);
?>