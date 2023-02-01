Este código es un ejemplo de una página web en PHP que contiene un formulario con casillas de verificación para seleccionar comidas y tours.

Al enviar el formulario, los valores seleccionados se procesan y se muestran en la misma página con una línea horizontal debajo del formulario.

El código contiene varios fragmentos de PHP que realizan diferentes tareas:

-   La función[[Funciones PHP#ccken()|ccken]] verifica si los datos enviados en el formulario están codificados correctamente y detiene la ejecución del script si hay un error de codificación.
-   La función [[Funciones PHP#es()|es()]] escapa los caracteres especiales en los datos enviados para prevenir ataques XSS.
-   El código verifica [[Funciones PHP#isset()|isset()]] si se han seleccionado opciones de comida y tour, y luego comprueba si los valores seleccionados corresponden a los valores permitidos. Si hay un error de entrada, se almacena un mensaje de error.
-   La función [[Funciones PHP#checked()|checked()]] se utiliza para marcar las casillas de verificación correspondientes con los valores seleccionados.
-   Finalmente, el código muestra los valores seleccionados y cualquier mensaje de error si es necesario.
## codigo
```PHP
<!DOCTYPE html>

<html lang="es">

    <head>

        <meta charset="utf-8">

        <title>Pagina de descuento</title>

        <link href="css/style.css" rel="stylesheet">        

    </head>

    <body>

        <div>

        <?php

            require_once("lib/util.php");

            if(!cken($_POST)){

  

                $enconding=mb_internal_encoding();

                $err= "Encoding Error! The expected encoding is " . $enconding;

  

                exit($err);

            }

  

            $_POST=es($_POST);

        ?>

  

        <?php

        if (isset($_POST['meal']))

        {

            $meals = ["desayuno", "alimento"];

  

            $diffValue = array_diff($_POST["meal"], $meals);

  

            if (count($diffValue) == 0)

            {

                $mealChecked = $_POST["meal"];

            } else {

  

                $mealChecked = [];

                $error[] = "Hubo un error de entrada en la comida.";

            }

        }else {

            $mealChecked = [];

        }

  

        if (isset($_POST["tour"]))

        {

            $tour = ["canoa", "MTB", "tolerante"];

  

            $diffValue = array_diff($_POST["tour"], $tour);

  

            if (count($diffValue) ===0)

            {

                $tourChecked = $_POST["tour"];

            } else{

                $tourChecked = [];

                $error[] = "Hubo un error de entrada en el tour.";

            }

        }else {

            $tourChecked = [];

        }

        ?>

  

        <?php

        function checked(string $value, array $checkedValues)

        {

            $isChecked = in_array($value, $checkedValues);

  

            if ($isChecked){

                echo "checked";

            }

        }

        ?>  

        <form method="post" action="<?php echo es($_SERVER['PHP_SELF']); ?>">

        <ul>

            <li><span>Comida: </span>

                <label><input type="checkbox" name="meal[]" value="desayuno" <?php checked("desayuno", $mealChecked); ?>desayuno> </label>

                <label><input type="checkbox" name="meal[]" value="alimento" <?php checked("alimento", $mealChecked); ?>alimento> </label>

            </li>

            <li><span>tour: </span>

                <label><input type="checkbox" name="tour[]" value="canoa" <?php checked("canoa", $tourChecked); ?>canoa> </label>

                <label><input type="checkbox" name="tour[]" value="MTB" <?php checked("MTB", $tourChecked); ?>MTB> </label>

                <label><input type="checkbox" name="tour[]" value="tolerante" <?php checked("tolerante", $tourChecked); ?>tolerante> </label>

            </li>

            <li><input type="submit" value="Enviar"> </li>

        </ul>

        </form>        

  

        <?php

        $isSelected = count($mealChecked) > 0 || count($tourChecked) > 0;

        if ($isSelected)

        {

            echo "<HR>";

  

            echo "comida: ", implode(" y ", $mealChecked), "<br>";

            echo "tour: ", implode(" y ", $tourChecked), "<br>";

        }else {

            "<HR>";

            echo "Ninguna seleccion";

        }

        ?>

  

        <?php  

        $error = [];

        if(count($error)>0){

            echo "<HR>";

            echo '<span class ="error">', implode("<br>", $error), '</span>';

        }        

        ?>

        </div>

    </body>

</html>
```
