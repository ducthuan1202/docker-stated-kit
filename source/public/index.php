<?php 

include "../app/common.php";

dd(array_get_value($_SERVER, 'REQUEST_URI', '/fdf'));