## Codigo
```PHP
<!DOCTYPE html>

<html lang="ja">

    <head>

        <meta charset="utf-8">

        <title>llenar formulario</title>

        <link href="../../css/style.css" rel="stylesheet">

    </head>

    <body>

        <div>

            <form method="POST" action="nameCheck.php">

                <ul>

                    <li><label>名前: <input type="text" name="name"></label></li>

                    <li><input type="submit" value="送信する"> </li>

                </ul>

            </form>

        </div>

    </body>

</html>
```
## Explicacion
La primera línea especifica que es un documento [[HTML5]] y el lenguaje del documento es japonés. 
La siguiente línea especifica la codificación de caracteres utilizada en el documento como "UTF-8".

Luego, se vincula un archivo [[CSS(Cascading Style Sheets)]] (Cascading Style Sheets) llamado "style.css" que se encuentra en la carpeta "css" que esta en una carpeta anterior a la carpeta actual con la ruta "../../css/style.css" para dar estilo al formulario.

La estructura principal del formulario es una etiqueta [[etiqueta#`<form>`|`<form>`]] con un atributo  [[Método de envío|method]]="[[Formulario de envío (POST)|POST]]" y action="nameCheck.php", lo que significa que cuando se envía el formulario, los datos se enviarán al servidor a través del método POST y se procesarán en el archivo `nameCheck.php`.

Dentro de la etiqueta "form", se encuentra una lista no ordenada "[[etiqueta#'< ul>'|<ul>]]" que contiene dos elementos de lista "[[etiqueta#`<li>`|"li"]]".
El primero es una etiqueta "[[etiqueta#`<label>`|"label"]]" con una etiqueta "[[etiqueta#`<input>`|input]]" dentro de ella, que es un campo de texto para ingresar el nombre y tiene un atributo "name" configurado como "name".

El segundo elemento de la lista es un botón de "submit" con el valor "送信する" (enviar en japonés). Este botón se utiliza para enviar los datos del formulario al servidor.