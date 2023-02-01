El método de envío GET es una de las dos formas en que los datos de un formulario pueden ser enviados a un servidor para su procesamiento. La otra forma es el método POST.

El método GET se utiliza para enviar los datos de un formulario en la URL. Es decir, los datos se agregarán a la URL como una serie de pares clave-valor separados por un signo de interrogación (?) y separados entre sí por un ampersand (&).

El método GET es adecuado para peticiones que solo leen datos y no modifican o agregar nuevos datos en el servidor. Sin embargo, los datos enviados por GET son visibles en la URL y son limitados en términos de tamaño. Por lo tanto, no se recomienda su uso para envíos de información confidencial o grandes cantidades de datos.
# GET
## Formulario de envío en HTML metodo (GET)
### Codigo
```PHP
<!DOCTYPE html>

<html lang="es">

    <head>

        <meta charset="utf-8">

        <title>Conceptos básicos del procesamiento de entrada de formulario(GET)</title>

        <link href="../../css/style.css" rel="stylesheet">

    </head>

    <body>

        <div>

            <form method="get" action="checkNo.php">

                <ul>

                    <li><label>numero: <input type="number" name="no" ></label></li>

                    <li><input type="submit" value="insvestigar" ></li>

                </ul>

            </form>

        </div>

    </body>

</html>
```
### Explicacion
Este código HTML define una página web que contiene un formulario para la entrada de datos.
La etiqueta `<!DOCTYPE html>` indica que se trata de un documento HTML.
La etiqueta `<html>` define el contenido principal de la página y su atributo `lang` indica que el idioma utilizado es español.

La sección `<head>` incluye información acerca del documento, como el título de la página y un enlace a un archivo CSS para dar formato a la página.

La sección `<body>` contiene el contenido principal de la página.
El formulario se define con la etiqueta `<form>`, y su método `method="get"` indica que los datos serán enviados utilizando el método HTTP GET. La acción `action="checkNo.php"` especifica la URL del script que procesará los datos de entrada.

El formulario contiene un campo para la entrada de un número con la etiqueta `<input type="number" name="no">`.

La etiqueta `<input>` es utilizada para crear elementos interactivos, como campos de entrada de datos. El atributo `type` indica el tipo de elemento, en este caso un campo de número. El atributo `name` se utiliza para dar un nombre al campo, que se utilizará para identificar los datos enviados.

El formulario también incluye un botón de envío con la etiqueta `<input type="submit" value="investigar">`. El atributo `value` especifica el texto que se mostrará en el botón.
## Archivo PHP que procesa los valores enviados desde el formulario HTML
### Codigo
```php
<!DOCTYPE html>

<html lang="ja">

    <head>

        <meta charset="utf-8">

        <title>Procesamiento de solicitudes GET</title>

        <link href="../../css/style.css" rel="stylesheet">

    </head>

    <body>

        <div>

        <?php

            $no = $_GET["no"];

  

            $nolist = [3, 5, 7, 8, 9];

  

            if(in_array($no, $nolist)){

                echo "se encontro el valor {$no}.";

            } else {

                echo "no se encontro el valor {$no}.";

            }

            ?>

        </div>

    </body>

</html>
```
### Explicacion
Este código es una página web en HTML y PHP que procesa una solicitud GET.

1.  La primera línea especifica el tipo de documento y se llama "DOCTYPE html".
    
2.  La siguiente línea es el inicio de la etiqueta HTML y especifica el idioma como "ja" (japonés).
    
3.  La etiqueta head contiene metadatos acerca de la página, como el título y la hoja de estilo enlazada.
    
4.  El cuerpo de la página contiene un formulario que envía los datos a la página "checkNo.php" mediante el método GET. El formulario tiene un campo de número y un botón de "insvestigar".
    
5.  El código PHP en el cuerpo de la página obtiene el valor enviado a través del campo "no" mediante la variable $_GET.
    
6.  Se declara una matriz llamada "nolist" que contiene los valores 3, 5, 7, 8 y 9.
    
7.  Se usa la [[función in_array()]] para verificar si el valor recibido está en la matriz.
    
8.  Si el valor está en la matriz, se muestra un mensaje que dice "se encontro el valor X." con X siendo el valor recibido. De lo contrario, se muestra un mensaje que dice "no se encontro el valor X." con X siendo el valor recibido.
# Get Multibyte
## código HTML que utiliza el método GET para enviar información a otro archivo PHP
### Codigo
```PHP
<!DOCTYPE html>

<html lang="ja">

    <head>

        <meta charset="utf-8">

        <title>Código de URL (GET)</title>

        <link href="../../css/style.css" rel="stylesheet">

    </head>

    <body>

        <div>

            <?php

            $data= "東京";

            $data= rawurldecode($data);

  

            $url = "checkData.php";

            echo "<a href={$url}?data={$data}>", "送信する", "</a>";

            ?>

        </div>

    </body>

</html>
```
### Explicacion 
1.  Se define la variable "data" con un valor de "東京" que representa una cadena de caracteres en japonés.
2.  La [[función rawurldecode()]] se utiliza para decodificar la cadena "data".
3.  Se define la variable "url" con el valor "checkData.php". Esta es la dirección URL del archivo PHP al que se enviarán los datos.
4.  La función echo crea un enlace ([[etiqueta]] < a>) con el texto "送信する" que apunta a la URL definida en la variable "url". También se adjunta la variable "data" a la URL como un parámetro.

Cuando un usuario hace clic en el enlace, se envía una solicitud GET a la dirección URL especificada con los datos de la variable "data". El archivo PHP destinatario puede acceder a los datos enviados a través de la variable $_GET.
## página web en PHP que recibe información a través del método GET
### Codigo
```PHP
<!DOCTYPE html>

<html lang="ja">

    <head>

        <meta charset="utf-8">

        <title>Código de URL (GET)</title>

        <link href="../../css/style.css" rel="stylesheet">

    </head>

    <body>

        <div>

        <?php

            $data = $_GET["data"];

  

            $data = rawurldecode($data);

            echo "[{$data}] recibio ";

            ?>

        </div>

    </body>

</html>
```
### Explicacion
Este código es una página web en PHP que recibe información a través del método GET.

1.  Primero, se establece una variable `$data` que obtiene el valor de la información enviada a través de la URL utilizando el arreglo $_GET.
    
2.  Luego, la función `rawurldecode` se utiliza para decodificar la información recibida y almacenarla en la variable `$data`.
    
3.  Finalmente, se imprime en la página web el valor decodificado de la información recibida, entre corchetes, seguido de la palabra "recibio".