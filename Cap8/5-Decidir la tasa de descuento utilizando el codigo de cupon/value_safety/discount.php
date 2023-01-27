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