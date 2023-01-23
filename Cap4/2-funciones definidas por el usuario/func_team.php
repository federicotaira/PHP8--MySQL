<?php
/*Este código es un ejemplo de cómo utilizar una función en PHP con un argumento variable. La función "team" tiene dos parámetros de entrada: "name" y "members". "name" es el nombre del equipo y "members" es una lista de miembros del equipo, estos miembros se pasan como argumentos adicionales.

Dentro de la función, se utiliza la función de print_r para imprimir el nombre del equipo y el array de miembros.

La función print_r imprime la información de una variable en un formato legible para humanos, con el objetivo de depurar y verificar el contenido de una variable.

Por último, se llama a la función team con el argumento "peach" y tres miembros más, "佐藤", "田中", "加藤".

En resumen, este código muestra cómo utilizar una función en PHP con un argumento variable y cómo utilizar la función print_r para imprimir el contenido de una variable en un formato legible para humanos.*/
function team($name, ...$members)
{
    print_r($name . PHP_EOL);
    print_r($members);
}
team("peach", "佐藤", "田中", "加藤");
?>