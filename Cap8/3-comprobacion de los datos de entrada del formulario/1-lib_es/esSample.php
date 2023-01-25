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

            $myCode = "<h2> prueba 1</h2>";
            $myArray = ["a"=>"<p>rojo</p>","b"=>"<script>alert('hello')</script>"];

            echo '$myCode valor: ', es($myCode);
            echo PHP_EOL. PHP_EOL;
            echo '$myArray valor: ';
            print_r(es($myArray));
            ?>
        </pre>
    </div>
</body>
</html>