<?php
/*Este es un ejemplo de código PHP que itera a través de una matriz de números y calcula la suma de todos los números positivos.

La matriz se llama $list y contiene 5 números. La variable $count se utiliza para almacenar la cantidad de elementos en la matriz.
La variable $sum se inicializa en 0, y se utilizará para almacenar la suma de los números positivos.

Luego, se utiliza un bucle for para iterar a través de la matriz. En cada iteración, la variable $value se establece en el valor actual del elemento de la matriz.

Si el valor es negativo, se utiliza la instrucción continue para saltar esa iteración y continuar con la siguiente.

Si el valor es positivo, se suma a la variable $sum.

Finalmente, se utiliza echo para mostrar el resultado de la suma de los números positivos. */
$list = array(20, -32, 50, -5, 40);
$count = count($list);
$sum = 0;
for($i=0; $i<$count; $i++){
    $value = $list[$i];
    if($value<0){
        continue;
    }
    $sum += $value;
}
echo "合計: $sum";
?>