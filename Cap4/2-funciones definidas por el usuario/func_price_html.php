<?php
/*Este código es un ejemplo de cómo utilizar una función definida en PHP dentro de un documento HTML.

La función "price" se define en el código PHP dentro de las etiquetas <?php y ?>. Esta función toma dos parámetros de entrada: "tanka" y "kosu" y devuelve el precio total con un costo adicional de envío si es necesario.

Después de definir la función, se utiliza dos veces para calcular el precio total de dos compras diferentes, almacenando el resultado en las variables $kingaku1 y $kingaku2.

Luego se utiliza echo para imprimir el valor de ambas variables dentro de una cadena de texto dentro del cuerpo del documento HTML.

En resumen, este código muestra cómo utilizar una función definida en PHP dentro de un documento HTML y utilizarla para calcular el precio total de varias compras.*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> ユーザ定義関数をhtmlコードに組み込む</title>
    </head>
    <body>
        2400円を2個購入した場合の金額は
        <?php
        $kingaku1=price(2400,2);
        echo "{$kingaku1}円"
        ?>
        <br>

        1200円を5個購入した場合の金額は
        <?php
        $kingaku2=price(1200, 5);
        echo "{$kingaku2}円"
        ?>

        <?php
        function price($tanka, $kosu)
        {
            $souryo = 250;
            $ryoukin = $tanka * $kosu;


            if ($ryoukin < 5000) {
                $ryoukin += $souryo;
            }
            return $ryoukin;
        }
        ?>
    </body>
</html>