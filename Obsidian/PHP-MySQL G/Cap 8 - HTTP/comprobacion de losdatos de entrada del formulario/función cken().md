# Util.php
## Codigo
```PHP
<?php

function es($data, $charset='UTF-8')

{

    if(is_array($data)){

        return array_map(__METHOD__, $data);

    }else {

        return htmlspecialchars($data, ENT_QUOTES, $charset);

    }

}

function cken($data)

{

    $result = true;

    foreach ($data as $key => $value) {

        if (is_array($value)) {

            $value = implode("", $value);

        }

        if (!mb_check_encoding($value)) {

            $result = false;

            break;

        }

    }

    return $result;

}

?>
```
## Explicacion
Este código es de PHP y contiene dos funciones: "es" y "cken".

La función "[[función es()|es()]]" toma dos argumentos: un array o una cadena (llamado "data") y una cadena de caracteres (llamado "charset") con un valor predeterminado de "UTF-8". La función verifica si "data" es un array, y si es así, utiliza la función "[[función  array_map()|array_map()]]" para aplicar la función actual a cada elemento del array. Si "data" no es un array, la función utiliza la función "[[función htmlspecialchars()|htmlspecialchars()]]" para convertir caracteres especiales en entidades HTML y devuelve el resultado.

La función "cken" toma un solo argumento: un array (llamado "data"). La función recorre el array "data" utilizando un bucle "foreach" y verifica si cada valor es un array. Si es un array, se convierte en una cadena utilizando la función "[[función implode()|implode()]]". Luego utiliza la función "[[función mb_check_encoding()|mb_check_encoding()]]" para verificar si la codificación de cada valor es válida. Si algún valor no tiene una codificación válida, la función devuelve falso. Si todos los valores tienen una codificación válida, devuelve verdadero.
# Ejemplo
```PHP
<!DOCTYPE html>

<html lang="ja">

<head>

    <meta charset="utf-8">

    <title>medidas XSS es()</title>

    <link href="../../css/style.css" rel="stylesheet">

</head>

<body>

    <div>

        <pre>

            <?php

  

            require_once("lib/until.php");

  

            $utf8_string = "hola";

            $sjis_string = mb_convert_encoding($utf8_string, 'Shift-JIs');

  
  

            $enconding = mb_internal_encoding();

  
  

        if(cken([$sjis_string]))

        {

            echo 'valor de matriz es, ', $enconding;

        } else{

            echo 'el valor de matriz no es, ', $enconding;

        }

        ?>

        </pre>

    </div>

</body>

</html>
```
Este código es un ejemplo de cómo utilizar las dos funciones mencionadas anteriormente en una página web escrita en PHP.

La primera línea especifica que es un documento HTML5 y el lenguaje del documento es japonés. La siguiente línea especifica la codificación de caracteres utilizada en el documento como "UTF-8".

Luego, se importa un archivo llamado "[[función es()#Util.php|Util.php]]" que contiene las funciones "[[función es()|es()]]" y "[[función cken()#Explicacion|cken()]]" definidas anteriormente.

Luego se define una variable "$utf8_string" con el valor "hola" y se utiliza la función "[[función mb_convert_encoding()|mb_convert_encoding()]]" para convertir la variable a "Shift-JIs".

La variable "$enconding" se define como la codificación actual, utilizando la función "[[función mb_internal_encoding()|mb_internal_encoding()]]".

Finalmente, se utiliza la función "cken" para verificar si la codificación de "$sjis_string" es válida. Si es válida, se imprime "valor de matriz es, (codificación actual". Si no es válida, se imprime "el valor de matriz no es, (codificación actual)".

En este ejemplo, la función "cken" se utiliza para verificar si una cadena esta codificada correctamente, es importante mencionar que esta función es solo una medida para prevenir XSS (Cross-site scripting), pero no es suficiente para evitar completamente los ataques XSS.