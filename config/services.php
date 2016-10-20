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
        'model' => App\Models\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    // oAuth Login services

    'strava' => [
      'client_id' => env('STRAVA_ID'),
      'client_secret' => env('STRAVA_SECRET'),
      'redirect' => env('STRAVA_REDIRECT_URI'),
      'scopes' => ['view_private'],
    ],

    'google' => [
      'client_id' => env('GOOGLE_ID'),
      'client_secret' => env('GOOGLE_SECRET'),
      'redirect' => env('GOOGLE_REDIRECT_URI'),
      'scopes' => []
    ],

    'facebook' => [
      'client_id' => env('FACEBOOK_ID'),
      'client_secret' => env('FACEBOOK_SECRET'),
      'redirect' => env('FACEBOOK_REDIRECT_URI'),
      'scopes' => []
    ],

    'twitter' => [
      'client_id' => env('TWITTER_ID'),
      'client_secret' => env('TWITTER_SECRET'),
      'redirect' => env('TWITTER_REDIRECT_URI'),
      'scopes' => []
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_ID'),
        'client_secret' => env('FACEBOOK_SECRET'),
        'redirect' => env('FACEBOOK_REDIRECT_URI'),
        'scopes' => []
    ],
];
