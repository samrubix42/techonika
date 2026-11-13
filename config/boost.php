<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Boost Master Switch
    |--------------------------------------------------------------------------
    |
    | Boost is a local development tool. Out of the box it switches itself on
    | whenever APP_DEBUG is true, which on a misconfigured server injects a
    | console-hijacking "browser logger" script into every page and exposes a
    | public, unauthenticated /_boost/browser-logs endpoint that writes to the
    | application log. We therefore make it strictly opt-in: set
    | BOOST_ENABLED=true in your *local* .env only. Never set it in production.
    |
    */

    'enabled' => (bool) env('BOOST_ENABLED', false),

    /*
    |--------------------------------------------------------------------------
    | Boost Browser Logs Watcher
    |--------------------------------------------------------------------------
    */

    'browser_logs_watcher' => (bool) env('BOOST_BROWSER_LOGS_WATCHER', true),

    /*
    |--------------------------------------------------------------------------
    | Boost Executables Paths
    |--------------------------------------------------------------------------
    */

    'executable_paths' => [
        'php' => env('BOOST_PHP_EXECUTABLE_PATH'),
        'composer' => env('BOOST_COMPOSER_EXECUTABLE_PATH'),
        'npm' => env('BOOST_NPM_EXECUTABLE_PATH'),
        'vendor_bin' => env('BOOST_VENDOR_BIN_EXECUTABLE_PATH'),
    ],

];
