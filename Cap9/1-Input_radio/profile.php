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
            require_once("lib/util.php");
            
            if(!cken($_POST)){

                $enconding=mb_internal_encoding();
                $err= "Encoding Error! The expected encoding is " . $enconding;

                exit($err);
            }

            $_POST=es($_POST);
        ?>
        <?php
        if (isset($_POST['sex'])){

            $sexValues = ["masculino", "femenino"];

            $isSex = in_array($_POST['sex'], $sexValues);

            if($isSex){

                $sex = $_POST['sex'];
            } else{

                $sex = "error";
                $error[] = "[otro sexo] Hubo un error de entrada en el género. ";
            }            
        } else{
            $isSex = false;
            $sex = "masculino";
        }

        if (isset($_POST['marriage'])){

            $marriageValues = ["soltero", "casado", "En pareja de hecho"];

            $isMarriage = in_array($_POST['marriage'], $marriageValues);

            if ($isMarriage){

                $marriage = $_POST['marriage'];
            } else {
                $marriage = "error";
                $error[] = "Hubo un error de tipeo en Matrimonio.";
            }
        }else {
            $isMarriage = false;
            $marriage = "soltero";
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
            <li><span>sexo: </span>
                <label><input type="radio" name="sex" value="masculino" <?php checked("masculino", [$sex]); ?>masculino> </label>
                <label><input type="radio" name="sex" value="femenino" <?php checked("femenino", [$sex]); ?>femenino> </label>
            </li>
            <li><span>casamiento: </span>
                <label><input type="radio" name="marriage" value="soltero" <?php checked("soltero", [$marriage]); ?>soltero> </label>
                <label><input type="radio" name="marriage" value="casado" <?php checked("casado", [$marriage]); ?>casado> </label>
                <label><input type="radio" name="marriage" value="En pareja de hecho" <?php checked("En pareja de hecho", [$marriage]); ?>En pareja de hecho> </label>
            </li>
            <li><input type="submit" value="Enviar"> </li>
        </ul>
        </form>

        <?php 

        $isSubmited = $isSex && $isMarriage;

        if ($isSubmited){
            echo "<HR>";
            echo "usted es {$sex}, estado: {$marriage}";
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