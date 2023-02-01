## Codigo
```PHP
<!DOCTYPE html>

<html lang="es">

    <head>

        <meta charset="utf-8">

        <title>Verificacion de la entrada de un formulario de calculos</title>

        <link href="../../css/style.css" rel="stylesheet">      

    </head>

    <body>

        <div>

            <?php

            require_once("../../lib/util.php");

            if(!cken($_POST)){

  

                $enconding=mb_internal_encoding();

                $err= "Encoding Error! The expected encoding is " . $enconding;

  

                exit($err);

            }

  

            $_POST=es($_POST);

            ?>

  

            <?php

            $errors = [];

            ?>

  

            <?php

            if(isset($_POST['costoTotal'])){

                $costoTotal = $_POST['costoTotal'];

                if (!ctype_digit($costoTotal))

                {

                    $errors[] = "Ingrese el monto total como un número entero.";

                }    

            }else{

                    $errors[] = "Importe total fijado como final.";

                }

  

            if (isset($_POST['cantidad']))

            {

                $cantidad = $_POST['cantidad'];

                if(!ctype_digit($cantidad))

                {

                    $errors[] = "Ingrese el número de entradas como un número entero";

                } else if($cantidad==0) {

                    $errors[] = "0 personas no pueden dividir";

                }

            } else{

  

                    $errors[] = "Número de personas no establecido";

            }

            ?>

  

            <?php

            if(count($errors)>0)

            {

  

                echo '<ol class= "error">';

                foreach ($errors as $value)

                {

                    echo "<li>", $value, "</li>";

                }

                echo "</ol>";

            ?>

            <form method="post" action="warikanForm.php">

                <ul>

                    <li><input type="submit" value="retorno"></li>

                </ul>

            </form>

            <?php

            } else{

               $resto = $costoTotal % $cantidad;

               $price = ($costoTotal- $resto) / $cantidad;

               $costoTotal_fmt = number_format($costoTotal);

               $price_fmt = number_format($price);

  

               echo "Total a pagar  {$costoTotal_fmt} 円   entre las {$cantidad} personas. ", "<br>";

                echo "{$price_fmt}円　por persona, el resto es {$resto}円 ";

            }

            ?>

  

        </div>

    </body>

</html>
```