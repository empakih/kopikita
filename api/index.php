<?php

// 1. Mark VERCEL environment
$_ENV['VERCEL'] = '1';
$_SERVER['VERCEL'] = '1';
putenv('VERCEL=1');

// 2. Auto-detect live APP_URL from Vercel headers
if (!empty($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $proto = $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? 'https';
    $host = $_SERVER['HTTP_X_FORWARDED_HOST'];
    $appUrl = "{$proto}://{$host}";
    $_ENV['APP_URL'] = $appUrl;
    $_SERVER['APP_URL'] = $appUrl;
    putenv("APP_URL={$appUrl}");
}

// Force consistent APP_NAME to ensure cookie names are always the same
if (empty(getenv('APP_NAME'))) {
    $_ENV['APP_NAME'] = 'KopiKita';
    $_SERVER['APP_NAME'] = 'KopiKita';
    putenv('APP_NAME=KopiKita');
}

// 3. Force valid APP_KEY
if (empty($_ENV['APP_KEY']) || empty(getenv('APP_KEY')) || $_ENV['APP_KEY'] === '') {
    $defaultKey = 'base64:iVYJIXXFcjH8PsOqd7cUjrdgHuqW9O42+t2/wfP2uTk=';
    $_ENV['APP_KEY'] = $defaultKey;
    $_SERVER['APP_KEY'] = $defaultKey;
    putenv("APP_KEY={$defaultKey}");
}

// 4. Force valid Timezone
if (empty($_ENV['APP_TIMEZONE']) || empty(getenv('APP_TIMEZONE')) || $_ENV['APP_TIMEZONE'] === '') {
    $_ENV['APP_TIMEZONE'] = 'Asia/Jakarta';
    $_SERVER['APP_TIMEZONE'] = 'Asia/Jakarta';
    putenv('APP_TIMEZONE=Asia/Jakarta');
}
date_default_timezone_set($_ENV['APP_TIMEZONE'] ?? 'Asia/Jakarta');

// 5. Create all needed writable /tmp storage directories
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

// 6. Ensure SQLite database is present and writable in /tmp
$sqliteSource = __DIR__ . '/../database/database.sqlite';
$sqliteDest = '/tmp/database.sqlite';
if (!file_exists($sqliteDest) && file_exists($sqliteSource)) {
    @copy($sqliteSource, $sqliteDest);
}

if (file_exists($sqliteDest)) {
    if (empty(getenv('DB_CONNECTION')) || getenv('DB_CONNECTION') === 'sqlite') {
        $_ENV['DB_CONNECTION'] = 'sqlite';
        $_SERVER['DB_CONNECTION'] = 'sqlite';
        $_ENV['DB_DATABASE'] = $sqliteDest;
        $_SERVER['DB_DATABASE'] = $sqliteDest;
        putenv('DB_CONNECTION=sqlite');
        putenv("DB_DATABASE={$sqliteDest}");
    }
}

// 7. Safe drivers for serverless (cookie session, array cache, stderr logging)
$_ENV['SESSION_DRIVER'] = 'cookie';
$_SERVER['SESSION_DRIVER'] = 'cookie';
putenv('SESSION_DRIVER=cookie');

// FIX: Use fixed cookie name so it never changes between lambda instances
$_ENV['SESSION_COOKIE'] = 'kopikita_session';
$_SERVER['SESSION_COOKIE'] = 'kopikita_session';
putenv('SESSION_COOKIE=kopikita_session');

// FIX: Do NOT encrypt session data in cookies — avoids issues where
// encrypted payload from one lambda can't be decrypted by another
// if APP_KEY is read slightly differently from env.
$_ENV['SESSION_ENCRYPT'] = 'false';
$_SERVER['SESSION_ENCRYPT'] = 'false';
putenv('SESSION_ENCRYPT=false');

// FIX: SameSite=lax can cause cookie to be dropped on POST redirects on Vercel.
// Use 'none' with Secure=true to ensure cookie is always sent.
$_ENV['SESSION_SAME_SITE'] = 'lax';
$_SERVER['SESSION_SAME_SITE'] = 'lax';
putenv('SESSION_SAME_SITE=lax');

$_ENV['SESSION_DOMAIN'] = '';
$_SERVER['SESSION_DOMAIN'] = '';
putenv('SESSION_DOMAIN=');

$_ENV['SESSION_SECURE_COOKIE'] = 'true';
$_SERVER['SESSION_SECURE_COOKIE'] = 'true';
putenv('SESSION_SECURE_COOKIE=true');

// FIX: Extend session lifetime significantly so it doesn't expire during
// the serverless cold start + DB copy + bootstrap time.
$_ENV['SESSION_LIFETIME'] = '120';
$_SERVER['SESSION_LIFETIME'] = '120';
putenv('SESSION_LIFETIME=120');

$_ENV['CACHE_STORE'] = 'array';
$_SERVER['CACHE_STORE'] = 'array';
putenv('CACHE_STORE=array');

$_ENV['LOG_CHANNEL'] = 'stderr';
$_SERVER['LOG_CHANNEL'] = 'stderr';
putenv('LOG_CHANNEL=stderr');

$_ENV['APP_MAINTENANCE_DRIVER'] = 'file';
$_SERVER['APP_MAINTENANCE_DRIVER'] = 'file';
putenv('APP_MAINTENANCE_DRIVER=file');

$_ENV['APP_MAINTENANCE_STORE'] = 'cache';
$_SERVER['APP_MAINTENANCE_STORE'] = 'cache';
putenv('APP_MAINTENANCE_STORE=cache');

$_ENV['BCRYPT_ROUNDS'] = '12';
$_SERVER['BCRYPT_ROUNDS'] = '12';
putenv('BCRYPT_ROUNDS=12');

$_ENV['HASH_DRIVER'] = 'bcrypt';
$_SERVER['HASH_DRIVER'] = 'bcrypt';
putenv('HASH_DRIVER=bcrypt');

$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_SERVER['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');

$_ENV['APP_DEBUG'] = 'true';
$_SERVER['APP_DEBUG'] = 'true';
putenv('APP_DEBUG=true');

// Forward Vercel serverless request to Laravel's public/index.php
require __DIR__ . '/../public/index.php';
