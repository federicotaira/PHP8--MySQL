<?php
/*Este es un ejemplo de código PHP que define una función llamada "double".

La función "double" tiene un parámetro de entrada llamado "n", que representa un número. Dentro de la función, se define una variable llamada "result" que se calcula multiplicando el valor de "n" por 2.
Finalmente, se utiliza la instrucción "return" para devolver el valor de "result" como el resultado de la función.

En resumen, esta función recibe un número como entrada y devuelve el doble de ese número como resultado.*/
function double($n){
    $result = $n * 2;
    return $result;
}
?>

<?php
$ans = double(125); //double(125) = 250
echo $ans;
?>