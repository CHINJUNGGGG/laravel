<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
 
    'facebook' => [
        'client_id' => '656202671682045',
        'client_secret' => '8e16fb36c34a4d2c969273dbfee9f167',
        'redirect' => 'http://localhost:8000/callback/facebook',
      ],

    'google' => [
        'client_id' => '963491586654-746lv97kfdlqsbdkpv6n8ck229ft13es.apps.googleusercontent.com',
        'client_secret' => 'nOyKiCIsnzlxh1xkNWPpn10B',
        'redirect' => 'http://localhost:8000/callback/google',
    ],

];
