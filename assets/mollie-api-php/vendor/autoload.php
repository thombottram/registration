<?php

// scoper-composer-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/composer-autoload.php';

include_once plugin_dir_path( __FILE__ ) . '/guzzlehttp/guzzle/src/functions.php';
include_once plugin_dir_path( __FILE__ ) . '/guzzlehttp/psr7/src/functions.php';
include_once plugin_dir_path( __FILE__ ) . '/guzzlehttp/promises/src/functions.php';


// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('database_read')) {
    function database_read() {
        return \_PhpScoper5de0f335c4b90\database_read(...func_get_args());
    }
}
if (!function_exists('database_write')) {
    function database_write() {
        return \_PhpScoper5de0f335c4b90\database_write(...func_get_args());
    }
}
if (!function_exists('printOrders')) {
    function printOrders() {
        return \_PhpScoper5de0f335c4b90\printOrders(...func_get_args());
    }
}
if (!function_exists('composerRequire5e4a0a8c34018ddf32bffe048a41535b')) {
    function composerRequire5e4a0a8c34018ddf32bffe048a41535b() {
        return \_PhpScoper5de0f335c4b90\composerRequire5e4a0a8c34018ddf32bffe048a41535b(...func_get_args());
    }
}
if (!function_exists('getallheaders')) {
    function getallheaders() {
        return \_PhpScoper5de0f335c4b90\getallheaders(...func_get_args());
    }
}

return $loader;
