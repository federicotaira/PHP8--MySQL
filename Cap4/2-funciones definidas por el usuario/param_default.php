<?php
/*Este código es un ejemplo de cómo utilizar una función en PHP para calcular el costo de un servicio en función de un rango y el número de días. La función "charge" tiene dos parámetros de entrada: "rank" y "days". "rank" es el rango del servicio (A, B, o ninguno) y "days" es el número de días que se utilizará el servicio (por defecto es 1 si no se proporciona un valor).

Dentro de la función, se utiliza una estructura switch para determinar el costo del servicio en función del rango. Si el rango es "A", el costo será 15000 * el número de días, si el rango es "B", el costo será 12000 * el número de días, y si el rango es diferente de A o B, el costo será 8000 * el número de días.

Finalmente, se devuelve el costo total con la instrucción "return $ryoukin;".

En resumen, esta función se utiliza para calcular el costo de un servicio según un rango y el número de días que se utilizará.*/
function charge($rank, $days=1){
    switch($rank){
        case "A":
            $ryoukin = 15000 * $days;
            break;
        case "B":
            $ryoukin = 12000 * $days;
            break;
        default:
            $ryoukin = 8000 * $days;
            break;
    }
    return $ryoukin;
}
?>

<?php
/**/
?>

<?php
$kingaku1 = charge("B", 2);
$kingaku2 = charge("A");

echo "金額1は {$kingaku1}円" . "<br>" . PHP_EOL;
echo "金額2は {$kingaku2}円";

/*Este código es similar al anterior, pero con la adición de algunas líneas de código adicionales para llamar a la función "charge" y utilizar el valor devuelto para imprimir el precio total en una cadena de texto.

La primera línea de código es la función "charge" que se define como en el ejemplo anterior.

Luego, se llama a la función dos veces y se almacena el resultado en las variables $kingaku1 y $kingaku2.

La primera vez se llama a la función con el argumento "B" y 2, el segundo con el argumento "A" y el valor por defecto.

Por último, se utiliza echo para imprimir el valor de ambas variables dentro de una cadena de texto dentro del cuerpo del documento HTML.

En resumen, este código muestra cómo utilizar una función definida en PHP para calcular el precio total de varios servicios y utilizar echo para imprimir el resultado en un documento HTML.*/
?>