<?php

    // $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // $uri_segments = explode('/', $uri_path);
    define('ADMIN_PREFIX', 'cts-adm');

    //get IP address from user
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = '';

    define('CLIENT_IP_ADRS', $ipaddress);

    define('INSERT', 0);
    define('UPDATE', 1);
    define('DELETE', 9);
    define('LIMIT_PAGE', 20);
    define('UPLOAD_PATH', WWW_ROOT.'uploads'.DS.'infos'.DS);




