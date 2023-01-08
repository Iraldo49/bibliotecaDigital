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
        'client_id' => '234822038606529',
        'client_secret' => 'adc0029e11ccfa7d0b6eca1a9e5d34b3',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '987105600430-aq00rapsjj4n6l261s01copfln4r45se.apps.googleusercontent.com',
        'client_secret' => 'sxY8KyUM0tr8U1l42ofHfZEy',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

    'github' => [
        'client_id' => '19735cb98b049b27262a',
        'client_secret' => '855c40b3550d55064f52db9818a75789642e4f3d',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

];
