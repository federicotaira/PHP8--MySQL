<?php
$couponlist = ["nf23gw" > 0.75, "ha45as" => 0.8, "hf56zx" => 8.5];
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

