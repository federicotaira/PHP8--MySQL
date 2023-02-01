 `array_map` La función de PHP es una función de manejo de arrays que permite aplicar una función o un método a cada elemento de un array y devolver un nuevo array con los resultados. La sintaxis es la siguiente:
 ```PHP
 array_map(__METHOD__, $data);
```
`__METHOD__` es una constante predefinida en PHP que representa el nombre completo de la clase y el nombre de la función o método actual.

En este caso, `__METHOD__` se está utilizando en una llamada a la función `array_map` para ejecutar la misma función recursivamente en cada elemento del array `$data`. De esta manera, si el argumento `$data` es un array de valores, la función `es` se ejecutará en cada uno de ellos.