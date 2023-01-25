<?php
function es(array|string $data, string $charset='UTF-8'):mixed
{
    if(is_array($data)){
        return array_map(__METHOD__, $data);
    }else {
        return htmlspecialchars(string: $data, flags: ENT_QUOTES, encoding: $charset);
    }
}