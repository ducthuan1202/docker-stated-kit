<?php 

namespace App\Service;

class Something{
    public static function Say(){
        echo 'Hello world: '. array_get_value($_SERVER, 'REQUEST_URI');
    }
}