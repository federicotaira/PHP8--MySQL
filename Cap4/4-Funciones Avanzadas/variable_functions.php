<?php
/*Este código es un ejemplo de cómo utilizar la función function_exists() en PHP. La función function_exists() verifica si una función con un nombre específico existe y devuelve verdadero si existe, falso de lo contrario.

En este caso, se declara una variable $msg con el valor "bye", luego se verifica si existe una función con ese nombre con la función function_exists(). Si existe, se llama a la función con el valor "金太郎" como argumento.

En este caso, dado que existe una función llamada "bye", la función bye es llamada y se imprime "金太郎さん、さよなら！"*/
function hello($who){
    echo "{$who}さん、こんにちは！";    
}

function bye($who){
    echo "{$who}さん、さよなら！";
}

$msg = "bye";
if(function_exists($msg)){
    $msg("金太郎");
}
?>