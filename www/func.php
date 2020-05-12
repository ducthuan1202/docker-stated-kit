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