La función `es` es una función personalizada de PHP que se utiliza para limpiar y validar los datos de entrada recibidos de un formulario. Toma como parámetro una cadena o un arreglo de cadenas y devuelve los mismos datos con caracteres especiales (como &, <, >, ", ') convertidos en entidades HTML para prevenir ataques XSS (Cross-Site Scripting).

La función utiliza la función built-in de PHP [[función htmlspecialchars()|htmlspecialchars]] para realizar la conversión de caracteres especiales a entidades HTML. Si se proporciona un arreglo, la función se aplica recursivamente a cada elemento del arreglo utilizando la función [[función  array_map()|array_map]]. La codificación de caracteres se especifica como un parámetro opcional, y se establece en UTF-8 por defecto.

Esta función es útil para garantizar la seguridad de la aplicación y proteger contra posibles ataques XSS al procesar los datos de entrada del usuario antes de almacenarlos o mostrarlos en la página web.

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

?>
```
## Explicacion
Esta es una función en PHP que convierte caracteres especiales en entidades HTML. Toma como entrada una cadena o un arreglo y devuelve una versión segura para ser utilizada en la salida HTML. La función utiliza la función [[función htmlspecialchars()|htmlspecialchars()]] de PHP para hacer la conversión. El argumento $charset especifica el juego de caracteres a utilizar, y se establece en "UTF-8" por defecto. La función es recursiva, lo que significa que si se le pasa un arreglo, se aplicará a cada elemento del arreglo.
# Ejemplo de uso de la funcion es()
## Codigo
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

  

            $myCode = "<h2> prueba 1</h2>";

            $myArray = ["a"=>"<p>rojo</p>","b"=>"<script>alert('hello')</script>"];

  

            echo '$myCode valor: ', es($myCode);

            echo PHP_EOL. PHP_EOL;

            echo '$myArray valor: ';

            print_r(es($myArray));
            
           ?>
        </pre>
    </div>
</body>
</html>
```
## Explicacion
esta página web muestra cómo utilizar la función es() para prevenir ataques de inyección de código XSS en PHP. Al utilizar la función es() para convertir los valores de las variables en entidades HTML seguras, se garantiza que cualquier código malicioso incluido en las variables no será ejecutado.

Primero, se incluye el archivo [[función es()#Util.php|../../lib/until.php]] que contiene la función `es()`:
```PHP
require_once("lib/until.php");

```
Luego se declara una variable llamada `$myCode` que contiene una cadena de texto HTML.
```PHP
$myCode = "<h2> prueba 1</h2>";
```
También se declara una variable llamada `$myArray` que contiene un array asociativo con valores en formato HTML.
```PHP
$myArray = ["a"=>"<p>rojo</p>","b"=>"<script>alert('hello')</script>"];
```
Se usa la función `es()` para proteger el contenido de `$myCode` y `$myArray` contra ataques XSS:
```PHP
echo '$myCode valor: ', es($myCode);
echo PHP_EOL. PHP_EOL;
echo '$myArray valor: ';
print_r(es($myArray));
```
-   Finalmente, se muestran los resultados de la aplicación de la función `es()` en un bloque `<pre>`.