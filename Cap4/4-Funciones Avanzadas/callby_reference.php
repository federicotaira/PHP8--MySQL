<?php
/*En este código, se define una función llamada "oneUp" que acepta un parámetro $var. Dentro de la función, se utiliza el operador de suma para aumentar el valor de $var en 1.
 Luego, se declara una variable $num con un valor inicial de 5.
 La función oneUp se llama y se le pasa el valor de $num como argumento. Dentro de la función, $num se aumenta en 1.
Después de que la función ha sido llamada, se utiliza el comando echo para imprimir el valor de $num, que debería ser 6 debido a que se incrementó en 1 en la función.

La diferencia entre esta version y la anterior es que en esta versión se añade el & en la declaración de la función para indicar que se está pasando el valor por referencia, en lugar de por valor. 
Esto significa que cualquier cambio realizado al argumento dentro de la función afectará al valor original de la variable fuera de la función.*/
function oneUp(&$var){
    $var+=1;
}

$num = 5;
oneUp($num);
echo $num;
?>