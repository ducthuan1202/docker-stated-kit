<?php 

function dump(...$arguments){
    echo '<pre>';
    var_dump(...$arguments);
    echo '</pre>';
}

function dd(...$arguments){
    dump(...$arguments);
    die();
}

function array_get_value($arr, $key, $default = null){

    if (array_key_exists($key, $arr)) {
        return $arr[$key];
    }

    return $default;
}