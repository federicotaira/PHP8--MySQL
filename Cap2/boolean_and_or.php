<?php
$test1 = TRUE;
$test2 = FALSE;
$hantei1 = ($test1 and $test2);
$hantei2 = ($test1 or $test2);
$hantei3 = !$test1;
var_dump($hantei1);
var_dump($hantei2);

?>