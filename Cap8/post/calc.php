<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Calcular con valores de entrada de formulario</title>
        <link href="../../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <?php
            $precioUnitario= $_POST["precioUnitario"];
            $cantidad= $_POST["cantidad"];

            $price= $precioUnitario* $cantidad;
            
            $precioUnitario = number_format($precioUnitario);
            $cantidad = number_format($cantidad);

            echo "Precio Unitario{$precioUnitario}円 x {$cantidad}cantidad es {$price}円"
            ?>
        </div>
    </body>
</html>