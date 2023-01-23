<?php
$color = "yellow";
$price = 100;
switch($color){
    case "green":
        $price = 120;
        break;
    case "red":
        $price = 140;
        break;
    
}
echo "{$color}は{$price}円";
?>