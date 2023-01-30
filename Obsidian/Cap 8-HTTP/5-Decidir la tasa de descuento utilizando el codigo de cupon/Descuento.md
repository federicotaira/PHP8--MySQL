#PHP
# saleData.php
 Este es un script de PHP que define dos funciones, `getCouponRate` y `getPrice`. `getCouponRate` toma un solo argumento, `$code`, que es un código de cupón. Luego, verifica si el código proporcionado existe en el array `$couponlist` utilizando la función `array_key_exists()`. Si el código existe, devuelve la tasa de cupón correspondiente, de lo contrario devuelve `null`. La segunda función `getPrice` toma un solo argumento, `$id`, que es un id de producto. Luego, verifica si el id proporcionado existe en el array `$priceList` utilizando la función `array_key_exists()`. Si el id existe, devuelve el precio correspondiente, de lo contrario devuelve `null`.
 #### codigo:
 
```php
<!DOCTYPE html>

<html lang="es">

    <head>

        <meta charset="utf-8">

        <title>Pagina de descuento</title>

        <link href="../../css/style.css" rel="stylesheet">        

    </head>

    <body>

        <div>

        <?php

            require_once("../lib/util.php");

            if(!cken($_POST)){

  

                $enconding=mb_internal_encoding();

                $err= "Encoding Error! The expected encoding is " . $enconding;

  

                exit($err);

            }

  

            $_POST=es($_POST);

        ?>

  

        <?php

                if(isset($_POST['couponCode'])){

                    $couponCode = $_POST['couponCode'];

                    } else {

                    $couponCode = "";

                    }        

        ?>

        <?php

                if(isset($_POST['goodsID'])){

                    $goodsID = $_POST['goodsID'];

                    } else {

                    $goodsID = "";

                    }        

        ?>

        <?php

            require_once("saleData.php");

  

            $discount = getCouponRate($couponCode);

            $tanka = getPrice($goodsID);

            if(is_null($discount) || is_null($tanka)){

  

                $err = '<div class ="error">Hubo operación ilegal </div>';

                exit($err);

            }

        ?>

        <?php

            if(isset($_POST['kosu'])){

                $kosu = $_POST['kosu'];

  

                if(!ctype_digit($kosu)){

                $errors [] = "Introduzca el número como un número entero.";

                }

            } else {

                $errors [] = "Cantidad no establecida";

            }

        ?>

  

<?php

            if (count($errors) > 0)

            {

                echo '<ol class= "error">';

                foreach ($errors as $value)

                {

                    echo "<li>", $value, "</li>";

                }

                echo "</ol>";

            }

            else

            {

                $price = $tanka * $kosu;

                $discount_price = floor($price * $discount);

                $off_price = $price - $discount_price;

                $off_per = (1 - $discount) * 100;

  

                $tanka_fmt = number_format($tanka);

                $discount_price_fmt = number_format($discount_price);

                $off_price_fmt = number_format($off_price);

  

                echo "precio unitario: {$tanka_fmt}円, Cantidad: {$kosu}piezas ", "<br>";

                echo "cantidad de dinero: {$discount_price_fmt}円", "<br>";

                echo "(descuento: {$off_price_fmt}円, {$off_per}% OFF)", "<br>";

            }

        ?>

  

<form method="post" action="discountForm.php">

  

<input type="hidden" name="kosu" value="<?php echo $kosu; ?>">

<ul>

    <li><input type="submit" name="Enviar"> </li>

</ul>

</form>

</div>

</body>

</html>
```


---


# DiscountForm.php
## 
Este código es un ejemplo de una página web que ofrece un descuento a los clientes que ingresan un código de cupón válido. La página incluye un formulario que permite a los clientes ingresar una cantidad de bienes y un código de cupón.

La página comienza verificando si hay errores de codificación en los datos enviados en el formulario mediante la función "[[9-1.0 funcion cken()|cken()]]". Luego, se utiliza la función "[[8-1.0 Funcion es()|es()]]" para limpiar los datos recibidos.

A continuación, se establece una variable "kosu" que se utilizará para almacenar la cantidad de bienes seleccionada por el cliente. Si no se recibe un valor para "kosu" en el formulario, se establece en un valor vacío.

Luego, se incluye un archivo "[[saleData.php]]" que contiene dos funciones: "getCouponRate" y "getPrice". Estas funciones se utilizan para obtener el porcentaje de descuento asociado con un código de cupón específico y el precio unitario de un bien específico, respectivamente.

A continuación, se establecen dos variables: "couponCode" y "goodsID", que contienen los valores predeterminados para el código de cupón y el ID del bien, respectivamente. Luego, se llama a las funciones "getCouponRate" y "getPrice" para obtener el porcentaje de descuento y el precio unitario. Si alguno de estos valores es nulo (no se encuentra un código de cupón o un ID de bien válido), se muestra un mensaje de error.

Finalmente, se calcula el porcentaje de descuento (que se utilizará para mostrar un mensaje de descuento en la página) y se muestra un formulario que permite a los clientes ingresar una cantidad de bienes y un código de cupón. Al enviar el formulario, los datos se enviarán de vuelta a esta misma página para procesar el descuento.
### Codigo
```php
<!DOCTYPE html>

<html lang="es">

    <head>

        <meta charset="utf-8">

        <title>Pagina de descuento</title>

        <link href="../../css/style.css" rel="stylesheet">        

    </head>

    <body>

        <div>

        <?php

            require_once("../lib/util.php");

            if(!cken($_POST)){

  

                $enconding=mb_internal_encoding();

                $err= "Encoding Error! The expected encoding is " . $enconding;

  

                exit($err);

            }

  

            $_POST=es($_POST);

        ?>

        <?php

            if(isset($_POST['kosu'])){

                $kosu = $_POST['kosu'];

            } else {

                $kosu = "";

            }

        ?>

  

        <?php

            require_once("saleData.php");

  

            $couponCode = "ha45as";

            $goodsID = "ax102";

  

            $discount = getCouponRate($couponCode);

            $tanka = getPrice($goodsID);

            if(is_null($discount) || is_null($tanka)){

  

                $err = '<div class ="error">Hubo operación ilegal </div>';

            }

        ?>

  

        <?php

            $off = (1- $discount)*100;

            if($discount>0){

                echo "<h2> En esta pagina hay descuento de {$off}%! </h2>";

            }

            $tanka_fmt = number_format($tanka);

        ?>

  

        <form method="post" action="discount.php">

            <input type="hidden" name="cuoponCode" value="<?php echo $couponCode; ?>">

            <input type="hidden" name="goodsID" value="<?php echo $goodsID; ?>">

  

            <ul>

                <li><label>precio unitario: <?php echo $tanka_fmt; ?>円 </label></li>

                <li><label>Cantidad:

                    <input type="number" name="kosu" value="<?php echo $kosu; ?>">

                </label></li>

                <li><input type="submit" name="Enviar"> </li>

            </ul>

        </form>

        </div>

    </body>

</html>
```
# Discount.php
Este código es un ejemplo de una página web en PHP que se utiliza para calcular un precio con descuento. Utiliza un formulario para recibir un código de cupón y un ID de producto del usuario. Luego, utiliza las funciones `getCouponRate()` y `getPrice()` para obtener el porcentaje de descuento y el precio del producto respectivamente. También valida si los datos recibidos son válidos y si hay algún error, muestra un mensaje de error. Finalmente, calcula el precio con descuento y lo muestra en pantalla.
### Codigo
```php
<!DOCTYPE html>

<html lang="es">

    <head>

        <meta charset="utf-8">

        <title>Pagina de descuento</title>

        <link href="../../css/style.css" rel="stylesheet">        

    </head>

    <body>

        <div>

        <?php

            require_once("../lib/util.php");

            if(!cken($_POST)){

  

                $enconding=mb_internal_encoding();

                $err= "Encoding Error! The expected encoding is " . $enconding;

  

                exit($err);

            }

  

            $_POST=es($_POST);

        ?>

  

        <?php

                if(isset($_POST['couponCode'])){

                    $couponCode = $_POST['couponCode'];

                    } else {

                    $couponCode = "";

                    }        

        ?>

        <?php

                if(isset($_POST['goodsID'])){

                    $goodsID = $_POST['goodsID'];

                    } else {

                    $goodsID = "";

                    }        

        ?>

        <?php

            require_once("saleData.php");

  

            $discount = getCouponRate($couponCode);

            $tanka = getPrice($goodsID);

            if(is_null($discount) || is_null($tanka)){

  

                $err = '<div class ="error">Hubo operación ilegal </div>';

                exit($err);

            }

        ?>

        <?php

            if(isset($_POST['kosu'])){

                $kosu = $_POST['kosu'];

  

                if(!ctype_digit($kosu)){

                $errors [] = "Introduzca el número como un número entero.";

                }

            } else {

                $errors [] = "Cantidad no establecida";

            }

        ?>

  

<?php

            if (count($errors) > 0)

            {

                echo '<ol class= "error">';

                foreach ($errors as $value)

                {

                    echo "<li>", $value, "</li>";

                }

                echo "</ol>";

            }

            else

            {

                $price = $tanka * $kosu;

                $discount_price = floor($price * $discount);

                $off_price = $price - $discount_price;

                $off_per = (1 - $discount) * 100;

  

                $tanka_fmt = number_format($tanka);

                $discount_price_fmt = number_format($discount_price);

                $off_price_fmt = number_format($off_price);

  

                echo "precio unitario: {$tanka_fmt}円, Cantidad: {$kosu}piezas ", "<br>";

                echo "cantidad de dinero: {$discount_price_fmt}円", "<br>";

                echo "(descuento: {$off_price_fmt}円, {$off_per}% OFF)", "<br>";

            }

        ?>

  

<form method="post" action="discountForm.php">

  

<input type="hidden" name="kosu" value="<?php echo $kosu; ?>">

<ul>

    <li><input type="submit" name="Enviar"> </li>

</ul>

</form>

</div>

</body>

</html>
```
