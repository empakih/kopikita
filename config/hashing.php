<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    */

    'driver' => env('HASH_DRIVER') ?: 'bcrypt',

    /*
    |--------------------------------------------------------------------------
    | Bcrypt Options
    |--------------------------------------------------------------------------
    */

    'bcrypt' => [
        'rounds' => (int) (env('BCRYPT_ROUNDS') ?: 12),
        'verify' => env('HASH_VERIFY') !== null && env('HASH_VERIFY') !== '' ? (bool) env('HASH_VERIFY') : true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    */

    'argon' => [
        'memory' => (int) (env('ARGON_MEMORY') ?: 65536),
        'threads' => (int) (env('ARGON_THREADS') ?: 1),
        'time' => (int) (env('ARGON_TIME') ?: 4),
        'verify' => env('HASH_VERIFY') !== null && env('HASH_VERIFY') !== '' ? (bool) env('HASH_VERIFY') : true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Rehash On Login
    |--------------------------------------------------------------------------
    */

    // VERCEL FIX: rehash_on_login disabled — SQLite in /tmp is ephemeral per lambda.
    // If enabled, Laravel UPDATEs the password hash, but the next lambda instance
    // gets a fresh SQLite copy from the repo, causing an infinite login redirect loop.
    'rehash_on_login' => false,

];
