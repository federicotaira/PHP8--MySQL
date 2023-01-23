<?php
$color = "green";
switch($color){
    case "green":
    case "red":
        $price = 140;
        break;
    case "blue":
        $price = 160;
        break;
    default:
        $price = 100;
        break;

}
echo "{$color}は{$price}円";
?>