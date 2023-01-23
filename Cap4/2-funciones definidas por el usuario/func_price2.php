<?php
/*Este es un ejemplo de código PHP que utiliza la función "price" para calcular el precio total de dos compras diferentes.

La función "price" se define como se explicó en el ejemplo anterior, recibe dos parámetros de entrada "tanka" y "kosu" y devuelve el precio total con un costo adicional de envío si es necesario.

Luego se utiliza la función "price" para calcular el precio total de dos compras diferentes, almacenando el resultado en las variables $kingaku1 y $kingaku2.

Por último, se utiliza echo para imprimir el valor de ambas variables en una cadena de texto.

En resumen, este código utiliza la función "price" para calcular el precio total de dos compras diferentes y luego imprime el resultado.*/
function price($tanka, $kosu)
{
    $souryo = 250;
    $ryoukin = $tanka * $kosu;

    if ($ryoukin < 5000) {
        $ryoukin += $souryo;
    }
    return $ryoukin;
}

$kingaku1 = price(2400, 2);
$kingaku2 = price(1200, 5);

echo "金額1は{$kingaku1}円" . "<br>" . PHP_EOL;
echo "金額２は{$kingaku2}円";
?>