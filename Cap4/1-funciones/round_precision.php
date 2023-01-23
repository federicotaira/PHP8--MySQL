
<?php
/*Este es un ejemplo de código PHP que utiliza la función round() para redondear un número con decimales.

La variable $value se inicializa con el valor 123.456.

Luego, se utiliza la función round() en 3 ocasiones:

$num1 = round($value) redondea el valor de $value al entero más cercano.
$num2 = round($value, 2) redondea el valor de $value a 2 decimales.
$num3 = round($value, -1) redondea el valor de $value al primer dígito después de la coma, es decir, a la décima más cercana.
Por último se utiliza var_dump() para imprimir el valor y el tipo de cada una de las variables $num1, $num2 y $num3.

En resumen, este código redondea el valor de $value a diferentes niveles de precisión y muestra los resultados.*/
$value = 123.456;
$num1 = round($value);
$num2 = round($value, 2);
$num3 = round($value, -1);

var_dump($num1);
var_dump($num2);
var_dump($num3);
?>


