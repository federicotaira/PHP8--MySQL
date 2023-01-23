<?php
/*Este código es similar al anterior, pero con algunas diferencias en cómo se maneja y se imprime la salida de la función.

La función "team" sigue teniendo dos parámetros de entrada: "name" y "members". "name" es el nombre del equipo y "members" es una lista de miembros del equipo, estos miembros se pasan como argumentos adicionales.

Dentro de la función, se utiliza la función implode para unir los miembros del equipo en una sola cadena de texto separada por "、" y se retorna el nombre del equipo seguido de los miembros del equipo separados por ":".

Por último, se almacena el resultado de la función "team" en dos variables $team1 y $team2 y se utiliza echo para imprimir el contenido de estas variables en el cuerpo del documento HTML.

En resumen, este código muestra cómo utilizar una función en PHP con un argumento variable, cómo unir los miembros del equipo en una sola cadena de texto separada por "、" y cómo utilizar echo para imprimir el resultado en un documento HTML.*/
function team($name, ...$members)
{
    $list = implode("、", $members);
    return "{$name} : {$list}";
}
$team1= team("peach", "佐藤", "田中", "加藤");
$team2= team("カボス", "ひろし", "きえこ");

echo $team1 . "<br>" . PHP_EOL;
echo $team2;
?>