<?php
/*En el código, se está asignando el valor "125" a una variable cuyo nombre es el contenido de otra variable.
 La variable "$color" se establece como "red" y luego se utiliza el operador de doble símbolo de dólar "$$" para crear una variable cuyo nombre es el contenido de la variable $color, es decir, "red".
 Entonces se asigna el valor 125 a esa variable.
  En la última línea, se imprime el valor de esa variable "red" creada con el valor 125.*/
$color = "red";
$$color = 125;
echo $red;
?>