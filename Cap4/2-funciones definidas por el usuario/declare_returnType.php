<?php
function twice(float $var){
    $var *= 2;
    return $var;
}
$num = 10.8;
$result = twice($num);
echo "{$num} の2 倍は　", $result;
?>