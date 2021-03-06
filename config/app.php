<?php

return [

    'name' => env('APP_NAME', 'Laravelito'),

    'env' => env('APP_ENV', 'production'),

    'debug' => env('APP_DEBUG', false),

    'url' => env('APP_URL', 'http://localhost'),

    'timezone' => 'UTC',

    'locale' => 'en',

    'fallback_locale' => 'en',

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    'log' => env('APP_LOG', 'single'), // Available Settings: "single", "daily", "syslog" & "errorlog".

    'log_level' => env('APP_LOG_LEVEL', 'debug'),

    'providers' => [

        // Laravel Framework Service Providers...
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        // Laravelito Service Providers
        App\Providers\ConsoleSupportServiceProvider::class,

        // Package Service Providers...
        Laravel\Tinker\TinkerServiceProvider::class,

        // Application Service Providers
        App\Providers\AppServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];
