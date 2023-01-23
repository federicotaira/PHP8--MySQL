<?php

/*Este código define una variable global llamada $tax con un valor de 0.1. 
Luego define una función llamada taxPrice, que toma dos argumentos, $tanka y $kosu.
 Dentro de la función, se utiliza la variable global $tax para calcular el precio total ($ryoukin) multiplicando el precio unitario ($tanka) por la cantidad ($kosu) y agregando el impuesto (1 + $tax).
 Finalmente, se imprime el precio total y se indica que es el precio con impuestos incluidos.*/
$tax = 0.1;

function taxPrice($tanka, $kosu){ //tanka= precio unitario kosu=cantidad
    global $tax;
    $ryoukin = $tanka * $kosu * (1 + $tax);
    echo "{$ryoukin}円です";
}
taxPrice(tanka: 250, kosu: 4);
echo "税込み" . $tax * 100, "%";
?>
