<?php
/*Este código define una función llamada "countUp", que utiliza una variable estática llamada "count" para contar cuántas veces se ha llamado a la función.
 La variable estática se inicializa en 0 y cada vez que se llama a la función, se incrementa en 1.
 En la línea 8, se usa un bucle "for" para llamar a la función 10 veces y mostrar el número de llamadas en cada iteración.
  En cada iteración, se llama a la función "countUp" y se muestra su valor devuelto seguido de la cadena "回目。".
*/
?>
<?php
function countUp(){
    static $count = 0;
    $count += 1;
    return $count;
}
for($i=1; $i<=10; $i++){
    echo countUp() . "回目。";    
}
?>