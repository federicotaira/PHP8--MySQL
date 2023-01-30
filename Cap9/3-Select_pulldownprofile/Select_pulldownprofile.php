<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Pagina de Estado Civil</title>
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
                $marriage = "soltero";
                $error[] = "Hubo un error de tipeo de estado civil.";
            }
        }else {
            $isMarriage = false;
            $marriage = "soltero";
        }
        ?>

        <?php
        
        function selected(string $value, array $selectedValues)
        {
            $isSelected = in_array($value, $selectedValues);

            if ($isSelected){
                echo "selected";
            }
        }
        ?>

        <form method="post" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
        <ul>
            <li><span>sexo: </span>
                <select name="sexo">
                    <option value="masculino" <?php selected("masculino", [$sex]) ; ?> >masculino</option>
                    <option value="femenino" <?php selected("femenino", [$sex]) ; ?> >femenino</option>
                </select>
            </li>
            <li><span>Estado Civil: </span>
            <select name="marriage">
            <option value="soltero" <?php selected("soltero", [$marriage]) ; ?> >soltero</option>
            <option value="casado" <?php selected("casado", [$marriage]) ; ?> >casado</option>
            <option value="En pareja de hecho" <?php selected("En pareja de hecho", [$marriage]) ; ?> >En pareja de hecho</option>
            </select>
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