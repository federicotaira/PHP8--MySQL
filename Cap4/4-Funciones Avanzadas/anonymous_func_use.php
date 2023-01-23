<?php
/*El código crea una variable llamada $msg que contiene el valor "ありがとう" (gracias). Luego, se crea una función anónima (una función sin nombre) llamada $myFunc que utiliza la variable $msg como una variable capturada (usando el operador use). Dentro de la función, se imprime un mensaje que incluye el contenido de la variable $msg.

En la siguiente línea, se cambia el valor de la variable $msg a "さよなら！" (adios). Luego, se llama la función $myFunc dos veces, con los argumentos "田中" y "佐藤", respectivamente.

Al imprimir el resultado, se ve que la función utiliza el valor original de la variable $msg, "ありがとう" en lugar de "さよなら！" ya que al crear la función se utilizó una variable capturada, que mantiene su valor en el momento de la creación de la función y no cambia con cambios en la variable fuera de la función.*/
$msg = "ありがとう";
$myFunc = function ($who) use ($msg) {
    echo "{$who}さん、" . $msg, PHP_EOL;
};

$msg = "さよなら！";

$myFunc("田中");
$myFunc("佐藤");
?>