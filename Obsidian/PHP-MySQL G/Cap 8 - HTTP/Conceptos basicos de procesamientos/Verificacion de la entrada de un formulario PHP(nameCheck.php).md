## Codigo
```PHP
<!DOCTYPE html>

<html lang="ja">

    <head>

        <meta charset="utf-8">

        <title>verificación de entrada de formulario</title>

        <link href="../../css/style.css" rel="stylesheet">

    </head>

    <body>

        <div>

            <?php

           require_once("lib/util.php");

  

            if(!cken($_POST)){

  

                $enconding= mb_internal_encoding();

                $err= "Encoding Error! The expected encoding is " . $enconding;

  

                exit($err);

            }

            $_POST = es($_POST);

            ?>

  

            <?php

            $isError= false;

  

            if(isset($_POST['name'])){

                $name= trim($_POST['name']);

                if($name===""){

                    $isError = true;

                }

            }else {

                $isError= true;

            }

            ?>

  

            <?php if($isError) : ?>

                <span class="error">dar el nombre del formulario</span>

                <form method="POST" action="nameCheckForm.php">

                    <input type="submit" value="戻る">

                </form>

            <?php else: ?>

                <span>

                    こんにちは、<?php echo $name; ?>さん。

                </span>    

            <?php endif; ?>

        </div>

    </body>

</html>
```
## Explicar

este código verifica la entrada de un formulario para asegurar que los datos recibidos estén en la codificación correcta y que se haya ingresado un valor para el campo "name". Si se encuentra algún error, se muestra un mensaje de error y se presenta un botón para regresar al formulario anterior. Si no se encuentra ningún error, se muestra un mensaje de bienvenida con el nombre ingresado.

La primera línea especifica que es un documento [[etiqueta#< !DOCTYPE html>|HTML5]] y el lenguaje del documento es japonés. La siguiente línea especifica la codificación de caracteres utilizada en el documento como "[[etiqueta#`<meta charset="utf-8">`|UTF-8]]".

Luego, se vincula un archivo [[CSS(Cascading Style Sheets)|CSS]] (Cascading Style Sheets) llamado "style.css" que se encuentra en la carpeta "css" que esta en una carpeta anterior a la carpeta actual con la ruta "../../css/style.css" para dar estilo al formulario.

En el código PHP se encuentra la función "[[función de require_once()|require_once()]]" que se utiliza para incluir un archivo [[función cken()#Util.php|util.php]]" que se encuentra en la ruta "../../lib/util.php". Este archivo contiene funciones para verificar la codificación de los datos del formulario.

Luego, se verifica si los datos enviados en el formulario están en la codificación correcta utilizando la función "[[función cken()| check()]]". Si los datos no están en la codificación correcta, se muestra un mensaje de error con la codificación esperada y se detiene la ejecución del script.

Después de verificar la codificación, los datos del formulario se pasan a la función "[[función es()| es()]]" para escapar cualquier caracter especial HTML y evitar ataques de Cross-Site Scripting (XSS).

Luego, se verifica si se ha recibido un valor para el campo "name" en el formulario y si este valor está vacío. Si no se ha recibido un valor o si el valor está vacío, se establece la variable "isError" en true.

En caso de haber un error, se muestra un mensaje de error en el cuerpo de la página que indica que el nombre del formulario es obligatorio y se presenta un botón para regresar al formulario anterior.

En caso contrario, se muestra un mensaje de bienvenida que incluye el nombre ingresado en el formulario.

