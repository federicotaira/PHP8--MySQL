 `rawurldecode`  es una [[función de PHP]] que se utiliza para decodificar una cadena de texto codificada previamente con `rawurlencode`.

La función `rawurlencode` codifica una cadena de texto de tal manera que todos los caracteres especiales son reemplazados por una representación codificada en URL. Por ejemplo, los espacios se reemplazan con `%20`.

La función `rawurldecode` decodifica una cadena codificada con `rawurlencode` para restaurar su valor original.

En el código proporcionado, la variable `$data` contiene una cadena de texto codificada con `rawurlencode`, y la función `rawurldecode` se usa para decodificar la cadena antes de agregarla a la URL para enviarla a otro archivo PHP.