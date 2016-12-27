<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */



    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '624024964433110',
    'client_secret' => '3f82391ea7976d8d7c9d485d15024f35',
    'redirect' =>'http://localhost:8000/callback',
],

    'google' => [
    'client_id' => '752185558821-9vlmac53np7bgdo3kn9d2e5ft39t7gud.apps.googleusercontent.com',
    'client_secret' => '63n4XDZCSSRVE0605TzasMX0',
    'redirect' =>'http://localhost:8000/google/callback',
],





];
