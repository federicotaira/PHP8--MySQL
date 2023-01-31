<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Uso de cuadro de lista</title>
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
                $mealSelected = $_POST["meal"];
            } else {

                $mealSelected = [];
                $error[] = "Hubo un error de entrada en la comida.";
            }
        }else {
            $mealSelected = [];
        }

        if (isset($_POST["tour"]))
        {
            $tour = ["canoa", "MTB", "tolerante"];

            $diffValue = array_diff($_POST["tour"], $tour);

            if (count($diffValue) ===0)
            {
                $tourSelect = $_POST["tour"];
            } else{
                $tourSelect = [];
                $error[] = "Hubo un error de entrada en el tour.";
            }
        }else {
            $tourSelect = [];
        }
        
        ?>

        <?php
        function selected(string $value, array $selectedValues)
        {
            $isSelected = in_array($value, $selectedValues);

            if ($isSelected){
                echo "checked";
            }
        }
        ?>   
        
        <form method="post" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
        <ul>
            <li><span>Comida: </span>
                <select name="meal[]" size= "2" multiple>
                    <option value="desayuno" <?php selected("desayuno", $mealSelected); ?>desayuno> </option>
                    <option value="alimento" <?php selected("alimento", $mealSelected); ?>alimento> </option>
                </select
            </li>
            <li><span>tour: </span>
                <select name ="tour[]" size= "3" multiple>
                    <option value="canoa" <?php selected("canoa", $tourSelect); ?>canoa> </option>
                        <option value="MTB" <?php selected("MTB", $tourSelect); ?>MTB> </option>
                        <option value="tolerante" <?php selected("tolerante", $tourSelect); ?>tolerante> </option>
                </select>
            </li>
            <li><input type="submit" value="Enviar"> </li>
        </ul>
        </form>        

        <?php
        $isSelected = count($mealSelected) > 0 || count($tourSelect) > 0;
        
        if ($isSelected)
        {
            echo "<HR>";

            echo "comida: ", implode(" y ", $mealSelected), "<br>";
            echo "tour: ", implode(" y ", $tourSelect), "<br>";
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