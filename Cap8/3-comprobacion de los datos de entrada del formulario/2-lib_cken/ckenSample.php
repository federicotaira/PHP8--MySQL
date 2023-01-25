<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>medidas XSS es()</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
    <div>
        <pre>
            <?php

            require_once("lib/until.php");

            $utf8_string = "hola";
            $sjis_string = mb_convert_encoding($utf8_string, 'Shift-JIs');


            $enconding = mb_internal_encoding();


        if(cken([$sjis_string]))
        {
            echo 'valor de matriz es, ', $enconding;
        } else{
            echo 'el valor de matriz no es, ', $enconding;
        }
        ?>
        </pre>
    </div>
</body>
</html>