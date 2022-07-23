<?php

function baseUrl($path = ''){
    $basePath = 'http://localhost/Login-system-with-PHP/src/';
    if($basePath != ""){
        $basePath = $basePath.$path;
    }

    return $basePath;
}

?>