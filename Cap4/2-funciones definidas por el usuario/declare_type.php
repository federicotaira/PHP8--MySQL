<?php
/*Este código es un ejemplo de cómo utilizar una función para calcular el doble de un número entero dado. La función se llama "twice" y toma un parámetro de entrada llamado "var" que es de tipo entero. Dentro de la función, el valor de "var" se multiplica por 2 y se asigna de nuevo a "var". Luego, la función devuelve el valor de "var".

En la línea siguiente, se declara una variable $num y se le asigna el valor 10.8. Luego, en la siguiente línea, se utiliza la función "twice" y se pasa $num como argumento. El valor devuelto por la función se asigna a la variable $result.

Finalmente, se utiliza la función echo para imprimir el mensaje "{$num} の2 倍は　" seguido del valor de $result.

En este caso, la función intenta multiplicar una variable float $num por 2, pero como el parámetro de entrada de la función es de tipo entero, se generará un error al tratar de pasar un numero decimal.

Para solucionarlo se debe convertir el numero decimal a entero antes de pasarlo a la función o simplemente cambiar el tipo de variable dentro de la función a float.*/
function twice(int $var){
    $var *= 2;
    return $var;
}
$num = 10.8;
$result = twice($num);
echo "{$num} の2 倍は　", $result;
?>