<?php

$a = 2 + "15";
$b = 2.3 + "1.25";
$c = 2 + "-4";
$d = "5" + "6";
$e = "5 6" + 7;  //peligroso
$f = "1.2e-3" * 2;
$g = "250円" * 2; //peligroso

// $h = "bla99" +1; //fatal error
// $i = 10 + "円"; //fatal error

echo "a {$a}, b{$b}, c{$c}, d{$d}, e{$e}, f{$f}, g{$g}";
?>
