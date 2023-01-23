<?php
$price = 0;
$max = 6;

for($kazu=1; $kazu <= $max; $kazu++)
{
    if($kazu <=3)
    {
        $price += 1000;
    } else 
    {
        $price += 500;
    }
    echo "{$kazu}人, {$price}円。";
}
?>