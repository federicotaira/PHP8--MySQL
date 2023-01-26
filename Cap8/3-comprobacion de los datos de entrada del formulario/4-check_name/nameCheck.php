<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>verificación de entrada de formulario</title>
        <link href="../../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <?php
           require_once("lib/util.php");

            if(!cken($_POST)){

                $enconding= mb_internal_encoding();
                $err= "Encoding Error! The expected encoding is " . $enconding;

                exit($err);
            }
            $_POST = es($_POST);
            ?>

            <?php
            $isError= false;

            if(isset($_POST['name'])){
                $name= trim($_POST['name']);
                if($name===""){
                    $isError = true;
                }
            }else {
                $isError= true;
            }
            ?>

            <?php if($isError) : ?>
                <span class="error">dar el nombre del formulario</span>
                <form method="POST" action="nameCheckForm.php">
                    <input type="submit" value="戻る">
                </form>
            <?php else: ?>
                <span>
                    こんにちは、<?php echo $name; ?>さん。
                </span>    
            <?php endif; ?>
        </div>
    </body>
</html>