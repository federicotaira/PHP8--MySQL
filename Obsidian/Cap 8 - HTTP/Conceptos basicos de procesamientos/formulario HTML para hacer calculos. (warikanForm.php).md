## Codigo
```PHP
<!DOCTYPE html>

<html lang="es">

    <head>

        <meta charset="utf-8">

        <title>llenar formulario</title>

        <link href="../../css/style.css" rel="stylesheet">

    </head>

    <body>

        <div>

            <form method="post" action="warikan.php">

                <ul>

                    <li><label>Costo Total: <input type="number" name="costoTotal"> </label></li>

                    <li><label>cantidad: <input type="number" name="cantidad"> </label></li>

                    <li><input type="submit" value="dividir la cuenta" ></li>

                </ul>

            </form>

        </div>

    </body>

</html>
```
## Explicar
este código crea un formulario para ingresar dos valores numéricos, y luego envía esos valores a un archivo PHP para su procesamiento.

Este código HTML es un formulario de dos campos, "Costo Total" y "cantidad". La etiqueta <[[etiqueta#`<form>`|<form>]]> indica el inicio del formulario y su atributo "[[Método de envío|method]]" especifica cómo se enviarán los datos del formulario al servidor. En este caso, el método es "[[Formulario de envío (POST)|post]]" y  El atributo "action" [[Verificacion de la entrada de un formulario PHP(warikan.php)|especifica a qué página se enviarán]] los datos del formulario cuando se haga clic en el botón "dividir la cuenta".

Dentro del formulario, hay dos campos de entrada: "Costo Total" y "cantidad". Cada campo es un elemento [[etiqueta#`<input>`|<input>]] con una etiqueta [[etiqueta#`<label>`|< label>]] para describir su función.
El atributo "type" del elemento < input> especifica el tipo de entrada y en este caso ambos son de tipo "number".
El atributo "name" del elemento < input> especifica el nombre del campo y se utiliza para identificar los datos enviados desde el formulario.

Finalmente, hay un elemento < input> con un atributo "type" de "submit" que representa el botón para enviar los datos del formulario.
La etiqueta < li> se utiliza para dar formato a los elementos dentro del formulario y
la etiqueta < ul> es una lista sin orden que se utiliza para contener los elementos < li>.
