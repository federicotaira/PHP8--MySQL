<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Código de URL (GET)</title>
        <link href="../../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div>
        <?php
            $data = $_GET["data"];

            $data = rawurldecode($data);
            echo "[{$data}] recibio ";
            ?>
        </div>
    </body>
</html>