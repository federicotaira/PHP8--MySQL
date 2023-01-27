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