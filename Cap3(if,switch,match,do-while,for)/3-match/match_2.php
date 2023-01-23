<?php
$colorNumber = 7;
$number = abs($colorNumber) % 4;
$colorName = match ($number) {
    0 => "青",
    1, 2 => "緑",
    3 => "黒",
};
echo "{$colorNumber}番は{$colorName}色です。 ";
?>