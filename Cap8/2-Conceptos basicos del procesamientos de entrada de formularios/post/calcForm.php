<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Conceptos básicos del procesamiento de entrada de formulario(POST)</title>
        <link href="../../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <form method="post" action="calc.php">
                <ul>
                    <li><label>precioUnitario: <input type="number" name="precioUnitario" ></label></li>
                    <li><label>cantidad: <input type="number" name="cantidad" ></label></li>
                    <li><input type="submit" value="calcular" ></li>
                </ul>
            </form>
        </div>
    </body>
</html>