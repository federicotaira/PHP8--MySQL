 in_array()   es una [[función de PHP]] que se utiliza para determinar si un valor específico se encuentra en un arreglo. Devuelve un valor booleano (TRUE o FALSE) según si el valor específico se encuentra o no en el arreglo. La sintaxis de la función es la siguiente:

in_array(valor_buscado, arreglo);

Donde:

-   valor_buscado es el valor que se desea buscar en el arreglo.
-   arreglo es el arreglo en el que se desea buscar el valor.

Ejemplo:

$numeros = [1, 2, 3, 4, 5]; $resultado = in_array(3, $numeros); echo $resultado; // imprime "1" (TRUE)

$resultado = in_array(6, $numeros); echo $resultado; // imprime "" (FALSE)