<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>llenar formulario</title>
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
        $errors = [];
        
        if(isset($_POST['zip']))
        {
            $zip = trim($_POST['zip']);
    
            $pattern = "/^[0-9]{3}-[0-9]{4}$/";
    
            if(!preg_match($pattern, $zip))
            {
                $errors = "Por favor ingrese un código postal válido";
            }
        }
         else
        {
            $errors = "Por favor ingrese un código postal válido";
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
            echo "el código postal es {$zip}.";
        }
        ?>
    
        <form method="post" action="zipCheckForm.php">
            <ul>
                <li><input type="submit" name="retorno" value="Volver"></li>
            </ul>
        </form>
        </div>
    </body>
</html>