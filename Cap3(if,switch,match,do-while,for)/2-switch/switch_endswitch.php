<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>コロン区切ったswitch構文</title>
    </head>
    <body>
        <?php
        $color = "red";
        switch ($color) {
            case "green":
                echo "緑色は120円です。<br>";
                break;
            case "red":
                echo "赤色は150円です。<br>";
                break;
            default:
                echo "その他の色は100円です。<br>";
                break;
        }
        ?>
    </body>
</html>
