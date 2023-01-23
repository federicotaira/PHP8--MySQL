<?php
/*Este código tiene una función llamada "oneUp" que recibe una variable como parámetro.
 Dentro de la función, se le suma 1 a la variable recibida. Luego, se establece una variable numérica llamada "num" con un valor de 5.
  La función "oneUp" se llama con la variable "num" como parámetro. 
  Sin embargo, al imprimir el valor de la variable "num" después de llamar a la función, seguirá siendo 5, ya que las variables pasadas a una función como parámetros son pasadas por valor, no por referencia. 
  Es decir, al pasar una variable como parámetro, se está pasando una copia de esa variable en lugar de la variable en sí. 
  En resumen, el cambio realizado dentro de la función no afectará el valor original de la variable.*/
function oneUp($var){
    $var+=1;
}

$num = 5;
oneUp($num);
echo $num;
?>