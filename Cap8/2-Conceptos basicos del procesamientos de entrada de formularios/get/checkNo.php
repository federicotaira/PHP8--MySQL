<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Procesamiento de solicitudes GET</title>
        <link href="../../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div>
        <?php
            $no = $_GET["no"];

            $nolist = [3, 5, 7, 8, 9];

            if(in_array($no, $nolist)){
                echo "se encontro el valor {$no}.";
            } else {
                echo "no se encontro el valor {$no}.";
            }
            ?>
        </div>
    </body>
</html>