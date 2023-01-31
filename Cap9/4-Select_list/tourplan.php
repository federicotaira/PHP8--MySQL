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