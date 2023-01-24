<?php

$data = $_GET["data"];

$data = rawurldecode($data);

$data = htmlspecialchars(string: $data, flags: ENT_QUOTES, encoding: 'UTF-8');
echo "[{$data}] recibio";
?>