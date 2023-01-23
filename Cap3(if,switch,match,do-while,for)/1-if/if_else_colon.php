<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> コロン区切ったif構文</title>
    </head>
    <body>
        <?php
        $age = 25;
        ?>

        <?php if ($age <= 15):?>
            15歳以下の料金は５００円です。<br>
        <?php elseif($age <=19):?>
            16歳以下の料金は2000円です。<br>
        <?php else :?>
            20歳以下の料金は2500円です。<br>
        <?php endif;?>
    </body>
</html>