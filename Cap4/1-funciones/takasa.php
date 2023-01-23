<?php
/*Este es un ejemplo de código PHP que calcula la altura de un árbol a partir de la distancia y el ángulo de inclinación.

La variable $kyori se inicializa con el valor 20, que representa la distancia desde la base del árbol hasta el lugar desde donde se mide.

La variable $kakudo se inicializa con el valor 32 grados convertido a radianes mediante la función pi()/180. Este es el ángulo de inclinación del árbol desde la base hasta la cima.

La variable $takasa se calcula utilizando la fórmula takasa = $kyori * tan($kakudo), la cual permite calcular la altura del arbol.

Por último, se utiliza la función round() para redondear el valor de $takasa a un decimal y se imprime el resultado en una cadena de texto con echo.

En resumen, este código calcula la altura de un árbol utilizando una fórmula matemática y la distancia y el ángulo de inclinación dados.*/
$kyori = 20; 
$kakudo = 32 * pi()/180; 
$takasa = $kyori * tan($kakudo); 
$takasa = round($takasa * 10) / 10;

echo "木の高さは{$takasa}mです";//"la altura del arbol es" de
?>