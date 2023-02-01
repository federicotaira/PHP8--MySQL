La función `require_once` es una función en PHP que permite incluir y ejecutar un archivo externo en el script actual. La diferencia con la función `require` es que `require_once` verifica si el archivo ha sido incluido previamente antes de intentar incluirlo nuevamente, lo que evita errores y mejora el rendimiento.

La sintaxis de `require_once` es la siguiente:
```PHP
require_once(../../lib/util.php)
```
La función `require_once` es útil cuando se desea incluir funciones, variables o clases definidas en un archivo externo en varios scripts de una aplicación. Al utilizar `require_once`, se asegura que el archivo sea incluido solo una vez, evitando posibles conflictos y mejorando el rendimiento de la aplicación.