<?php
$num = [3, 4, -2, 1, -3, 9, 0, 5];
usort($num, function ($a, $b) {
    return abs($a) <=> abs($b);
});
print_r($num);
?>