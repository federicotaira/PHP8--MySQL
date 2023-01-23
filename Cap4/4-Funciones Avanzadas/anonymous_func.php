<?php
/*En este código se está creando una función anónima asignada a una variable llamada $myFunc. Luego, se está llamando a la función usando la variable $myFunc y pasando el argumento "田中" como parámetro. La función imprimirá "田中さん、こんにちは!" en pantalla. Es importante notar que no se está utilizando la palabra clave "function" al momento de asignar la función anónima a la variable $myFunc.*/
$myFunc= function($who){
    echo "{$who}さん、こんにちは！";
};

$myFunc("田中");
?>