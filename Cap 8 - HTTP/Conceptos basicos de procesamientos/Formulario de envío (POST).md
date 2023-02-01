es un método de envío de formularios en el protocolo HTTP. Cuando se envía un formulario con el método POST, la información se transmite de forma codificada y se almacena en el cuerpo de la solicitud HTTP. La información transmitida por POST es invisible para el usuario y se utiliza para enviar datos confidenciales o sensibles. La cantidad de información que se puede enviar mediante POST es mayor que con GET, y los datos enviados con POST no se muestran en la URL. La seguridad y la privacidad son superiores con POST ya que los datos enviados no aparecen en la URL y se codifican antes de ser enviados.
# Formulario de envío en HTML metodo (POST)
## codigo
```php
<!DOCTYPE html>

<html lang="es">

    <head>

        <meta charset="utf-8">

        <title>Conceptos básicos del procesamiento de entrada de formulario(POST)</title>

        <link href="../../css/style.css" rel="stylesheet">

    </head>

    <body>

        <div>

            <form method="post" action="calc.php">

                <ul>

                    <li><label>precioUnitario: <input type="number" name="precioUnitario" ></label></li>

                    <li><label>cantidad: <input type="number" name="cantidad" ></label></li>

                    <li><input type="submit" value="calcular" ></li>

                </ul>

            </form>

        </div>

    </body>

</html>
```
## Explicacion
1.  Inicio del documento HTML: El archivo comienza con una declaración de tipo de documento (DOCTYPE) para especificar que se trata de un documento HTML y una [[etiqueta]] de inicio de HTML.
    
2.  Encabezado de HTML: Dentro de la etiqueta de inicio de HTML, se encuentra el encabezado del documento, que incluye las etiquetas `<head>` y `<meta>`. La etiqueta `<head>` contiene información sobre el documento, mientras que la etiqueta `<meta>` especifica la codificación de caracteres utilizada en el documento.
    
3.  Título de la página: Dentro de la etiqueta `<head>`, se encuentra la etiqueta `<title>` que contiene el título de la página que se mostrará en la pestaña del navegador.
    
4.  Hoja de estilo CSS: La etiqueta `<link>` en el encabezado permite incluir un archivo CSS externo para dar formato a la página.
    
5.  Inicio del cuerpo: Después del encabezado, se encuentra la etiqueta de inicio del cuerpo `<body>`, que contiene el contenido de la página web.
    
6.  Formulario de entrada: Dentro del cuerpo de la página, se encuentra el formulario de entrada con la etiqueta `<form>`. El atributo `method` especifica el método de envío de los datos, en este caso es `post`. El atributo `action` especifica la dirección a la que se enviarán los datos del formulario, en este caso es `calc.php`.
    
7.  Lista sin estilo: Dentro del formulario, se encuentra una lista sin estilo con la etiqueta `<ul>`.
    
8.  Primer campo de entrada: Dentro de la lista sin estilo, se encuentra el primer campo de entrada para el precio unitario con la etiqueta `<input>`. El atributo `type` especifica el tipo de entrada, en este caso es un número. El atributo `name` especifica el nombre del campo, que se usará en el script de procesamiento para acceder a los datos ingresados.
    
9.  Segundo campo de entrada: Dentro de la lista sin estilo, se encuentra el segundo campo de entrada para la cantidad con la etiqueta `<input>`. Tiene los mismos atributos que el primer campo.
    
10.  Botón de envío: Dentro de la lista sin estilo, se encuentra el botón de envío con la etiqueta `<input>`. El atributo `type` especifica que es un botón de envío y el atributo


# Archivo PHP que procesa los valores enviados desde el formulario HTML
## Codigo
```php
<!DOCTYPE html>

<html lang="es">

    <head>

        <meta charset="utf-8">

        <title>Calcular con valores de entrada de formulario</title>

        <link href="../../css/style.css" rel="stylesheet">

    </head>

    <body>

        <div>

            <?php

            $precioUnitario= $_POST["precioUnitario"];

            $cantidad= $_POST["cantidad"];

  

            $price= $precioUnitario* $cantidad;

            $precioUnitario = number_format($precioUnitario);

            $cantidad = number_format($cantidad);

  

            echo "Precio Unitario{$precioUnitario}円 x {$cantidad}cantidad es {$price}円"

            ?>

        </div>

    </body>

</html>
```
## Explicacion 
Este código es un script de PHP que se utiliza para calcular el costo total de un producto dado su precio unitario y la cantidad deseada.

1.  Se declara el tipo de documento HTML utilizando la etiqueta < !DOCTYPE html>.
2.  Se inicia el documento HTML con la etiqueta < html> y se especifica el idioma como español utilizando lang="es".
3.  En la sección < head> se especifica la codificación de caracteres, se agrega un título a la página y se enlaza un archivo CSS para estilizar la página.
4.  En la sección < body>, se crea una sección < div> para contener el código PHP.
5.  Se abre el código PHP con la etiqueta < ?php y se reciben los valores de precio unitario y cantidad desde el formulario utilizando $_POST.
6.  Se realiza el cálculo del costo total multiplicando el precio unitario por la cantidad.
7.  Se formatea el precio unitario y la cantidad para una presentación legible con la función number_format().
8.  Finalmente, se imprime el resultado del cálculo utilizando la función echo.
9.  Se cierra el código PHP con la etiqueta ?> y el documento HTML con la etiqueta < /html>.