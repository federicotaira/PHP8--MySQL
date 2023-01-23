<?php
/*Este código es un ejemplo de cómo pasar una variable a una función en PHP. La variable $kosu se define en la primera línea con el valor 2.
 Luego, se define una función llamada "price" que toma un parámetro, también llamado $kosu.
  En el cuerpo de la función, se multiplica $kosu por 250 y se guarda el resultado en una variable llamada $ryoukin.
   Por último, se imprime el valor de $ryoukin con la cadena "円です。" (lo cual significa "es yen").
La función es llamada al final con el argumento $kosu.
 El resultado es una impresión en pantalla que dice "2個です" (lo cual significa "es 2") y "500円です。" (lo cual significa "es 500 yen").*/
$kosu = 2;

function price($kosu){
    $ryoukin = 250 * $kosu;
    echo "{$ryoukin}円です。";
}

echo "{$kosu}個です";
price($kosu);

?>