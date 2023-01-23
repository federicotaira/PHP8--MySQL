<?php
do {
    $a = mt_rand(1, 13);
    $b = mt_rand(1, 13);
    $c = mt_rand(1, 13);
    $abc = $a + $b + $c;

    if ($abc == 21) {
        break;
    }

}
while (true);
echo "合計が21になる3個の数字。{$a}, {$b}, {$c}";
?>