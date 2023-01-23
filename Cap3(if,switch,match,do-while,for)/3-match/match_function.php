<?php
$course = "B";
$price = match ($course) {
    "A" => diner(2800),
    "B" => diner(4000),
};

function diner($total){
    $time = date("G", time());
        if($time >= 21){
        $total += 500;
        }
    return $total;
}

$now = date("G:i", time());
echo "{$course} コースは{$price}円。{$now}";
?>
