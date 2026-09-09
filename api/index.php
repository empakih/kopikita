<?php

// 1. Force valid APP_KEY
if (empty($_ENV['APP_KEY']) || empty(getenv('APP_KEY'))) {
    $defaultKey = 'base64:iVYJIXXFcjH8PsOqd7cUjrdgHuqW9O42+t2/wfP2uTk=';
    $_ENV['APP_KEY'] = $defaultKey;
    putenv("APP_KEY={$defaultKey}");
}

// 2. Force valid Timezone
if (empty($_ENV['APP_TIMEZONE']) || empty(getenv('APP_TIMEZONE'))) {
    $_ENV['APP_TIMEZONE'] = 'Asia/Jakarta';
    putenv('APP_TIMEZONE=Asia/Jakarta');
}
date_default_timezone_set($_ENV['APP_TIMEZONE'] ?? 'Asia/Jakarta');

// 3. Mark VERCEL environment variable so bootstrap/app.php knows
$_ENV['VERCEL'] = '1';
putenv('VERCEL=1');

// 4. Create all needed writable /tmp storage directories
$storageDirs = [
    '/tmp/storage',
    '/tmp/storage/framework',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

// 5. Ensure SQLite database is present and writable in /tmp
$sqliteSource = __DIR__ . '/../database/database.sqlite';
$sqliteDest = '/tmp/database.sqlite';
if (!file_exists($sqliteDest) && file_exists($sqliteSource)) {
    @copy($sqliteSource, $sqliteDest);
}

if (file_exists($sqliteDest)) {
    if (empty(getenv('DB_CONNECTION')) || getenv('DB_CONNECTION') === 'sqlite') {
        $_ENV['DB_CONNECTION'] = 'sqlite';
        $_ENV['DB_DATABASE'] = $sqliteDest;
        putenv('DB_CONNECTION=sqlite');
        putenv("DB_DATABASE={$sqliteDest}");
    }
}

// 6. Safe drivers for serverless (cookie session, array cache, stderr logging)
if (empty(getenv('SESSION_DRIVER')) || getenv('SESSION_DRIVER') === 'file' || getenv('SESSION_DRIVER') === 'database') {
    $_ENV['SESSION_DRIVER'] = 'cookie';
    putenv('SESSION_DRIVER=cookie');
}

if (empty(getenv('CACHE_STORE')) || getenv('CACHE_STORE') === 'file' || getenv('CACHE_STORE') === 'database') {
    $_ENV['CACHE_STORE'] = 'array';
    putenv('CACHE_STORE=array');
}

$_ENV['LOG_CHANNEL'] = 'stderr';
putenv('LOG_CHANNEL=stderr');

$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');

// 7. Enable APP_DEBUG so any exception details are visible
if (empty(getenv('APP_DEBUG'))) {
    $_ENV['APP_DEBUG'] = 'true';
    putenv('APP_DEBUG=true');
}

// Forward Vercel serverless request to Laravel's public/index.php
require __DIR__ . '/../public/index.php';
