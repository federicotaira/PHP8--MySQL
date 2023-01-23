<?php
/*La función twice declara un parámetro llamado $var que puede ser un string o un número flotante, pero en tiempo de ejecución, esta función intenta multiplicar el valor de $var por 2 y devolver el resultado como un número flotante. Sin embargo, dado que PHP no tiene la capacidad de especificar múltiples tipos de datos para una variable, esta función no funcionará correctamente.

En la primera llamada de la función con el argumento $num1, ya que es un string y no un número, y no se puede multiplicar un string. Esto causaría un error en tiempo de ejecución.

La segunda llamada con el argumento $num2, siendo un número flotante, la función multiplica por 2 y devuelve el valor correctamente.

Es importante notar que esta función no tiene ninguna lógica para validar si el parámetro es un número o un string, por lo que es probable que produzca errores.*/
function twice(string|float $var) : float {
    $var *= 2;
    return $var;
}
$num1 = "1.9cm";
$num2 = 2.6;
$result1 = twice($num1);
$result2 = twice($num2);
echo "{$num1} の2倍は", $result1, PHP_EOL;
echo "{$num2} の2倍は", $result2;
?>