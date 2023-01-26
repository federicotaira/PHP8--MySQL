<?php
function es(array|string $data, string $charset='UTF-8'):mixed
{
    if(is_array($data)){
        return array_map(__METHOD__, $data);
    }else {
        return htmlspecialchars(string: $data, flags: ENT_QUOTES, encoding: $charset);
    }
}
function cken(array $data): bool
{
    $result = true;
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $value = implode("", $value);
        }
        if (!mb_check_encoding($value)) {
            $result = false;

            break;
        }
    }
    return $result;
    
}
?>



