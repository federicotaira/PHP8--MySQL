<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>uso de cuadro deslizante</title>
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
        $error = [];
        
        $min = 1;
        $max = 5;

        if(isset($_POST["taste"]))
        {
            $taste = $_POST["taste"];


            $isTaste = ctype_digit($taste) && ($taste >= $min) && ($taste <= $max);

            if (!$isTaste)
            {
                $error[] = "hay un error en el valor ingresado";
                $taste = $min;
            }
        } else {
            $taste = round(($min + $max) / 2);
            $isTaste = true;
        }
        ?>

        <form method="post" action="<?php echo es($_SERVER['PHP_SELF']); ?>">

            <ul>
                <li><span>Locura: </span>
                <input type="range" name="taste" step="1" <?php echo "min={$min} max={$max}  value={$taste}";?>
                </li>
                <li><input type="submit" value="enviar"> </li>
            </ul>    
        </form> 

        <?php
        if ($isTaste){
            $tasteList = ["medio loco", "loco", "normal", " Re loco", "NARNIA!!!"];
            echo "<HR>";
            echo "Nivel de locura ({$taste} . {$tasteList[$taste - 1]}).";
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