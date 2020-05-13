<?php 

function array_get_value($arr, $key, $default = null){

    if (array_key_exists($key, $arr)) {
        return $arr[$key];
    }

    return $default;
}