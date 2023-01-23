<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>コロン区切ったswitch構文</title>
    </head>
    <body>
        <?php
        $color="red";
        ?>
    
    <?php switch($color) : ?>
<?php case "green" : ?>
        緑色は120円です。<br>
    <?php break; ?>
<?php case"red":?>
        赤色は150円です。<br>
    <?php break; ?>
<?php default: ?>
        そ他の色は100円です。<br>
    <?php break; ?>
<?php endswitch; ?>
    </body>
</html>