<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    */

    /* application credentials **/
    'secret_key' => env('SHOPLO_SECRET_KEY', ''),
    'consumer_key' => env('SHOPLO_CONSUMER_KEY', ''),
    'callback_url' => env('SHOPLO_CALLBACK_URL', ''),

    /* API configuration */

    'api_url' => 'http://api.shoplo.com',
    'request_token_uri' => '/services/oauth/request_token',
    'access_token_uri' => '/services/oauth/access_token',
    'authorize_url' => 'http://api.shoplo.com/services/oauth/authorize'
];
