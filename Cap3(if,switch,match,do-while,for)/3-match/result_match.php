<?php
$level = 2;
$result = match ($level) {
    1 => "初心者",
    2 => "中級者",
    default => "該当無し",
};
echo "判定 {$result}";
?>