<?php
$couponlist = ["nf23gw" => 0.75, "ha45as" => 0.8, "hf56zx" => 8.5];
$priceList = ["ax101" => 2300, "ax102" => 2900];


function getCouponRate($code){
    global $couponlist;

    $isCouponCode = array_key_exists($code, $couponlist);
    if($isCouponCode){
        return $couponlist[$code];
    } else {
        return null;
    }
}

function getPrice($id){
    global $priceList;
    $isGoodsID = array_key_exists($id, $priceList);
    if($isGoodsID){
        return $priceList[$id];
    } else {
        return null;
    }
}


/*Este código es un script de PHP que define dos funciones: getCouponRate y getPrice.

La función getCouponRate tiene un parámetro $code, que es el código del cupón que se va a verificar. La función utiliza una variable global $couponlist, que es una matriz asociativa de códigos de cupones y tasas de descuento. La función comprueba si el $code proporcionado está en la matriz $couponlist y si está presente, devuelve la tasa de descuento correspondiente. Si el código no está presente en la matriz, la función devuelve null.

La función getPrice tiene un parámetro $id, que es el ID del producto para el que se va a obtener el precio. La función utiliza una variable global $priceList, que es una matriz asociativa de IDs de productos y precios. La función comprueba si el $id proporcionado está en la matriz $priceList y si está presente, devuelve el precio correspondiente. Si el ID no está presente en la matriz, la función devuelve null.

En resumen, las funciones proporcionadas en este código se utilizan para verificar si un código de cupón o un ID de producto está presente en una lista específica y devuelve la tasa de descuento o el precio correspondiente, si es que está presente, y devuelve null si no está presente.



 */