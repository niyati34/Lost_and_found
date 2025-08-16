<?php
// Bootstrap: defines base paths/URL and default DB config with optional local overrides.

// Load local overrides first so defaults can fill in anything missing.
$__local_cfg = __DIR__ . '/config.local.php';
if (is_file($__local_cfg)) {
    require_once $__local_cfg;
}

// Base app path (filesystem)
if (!defined('base_app')) {
    define('base_app', rtrim(str_replace('\\', '/', __DIR__), '/') . '/');
}

// Compute base URL if not provided by local config
if (!defined('base_url')) {
    $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (isset($_SERVER['SERVER_PORT']) && (int)$_SERVER['SERVER_PORT'] === 443);
    $scheme = $isHttps ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $scriptDir = isset($_SERVER['SCRIPT_NAME']) ? dirname($_SERVER['SCRIPT_NAME']) : '/';
    $scriptDir = rtrim(str_replace('\\', '/', $scriptDir), '/');
    $basePath = ($scriptDir === '' || $scriptDir === '.') ? '/' : ($scriptDir . '/');
    define('base_url', $scheme . '://' . $host . $basePath);
}

// Default DB config (overridable via config.local.php before these defines)
if (!defined('DB_HOST')) define('DB_HOST', '127.0.0.1');
if (!defined('DB_USER')) define('DB_USER', 'root');
if (!defined('DB_PASS')) define('DB_PASS', '');
if (!defined('DB_NAME')) define('DB_NAME', 'lfis_db');

// Sensible PHP defaults
if (!ini_get('date.timezone')) {
    ini_set('date.timezone', 'Asia/Manila');
}
date_default_timezone_set(ini_get('date.timezone'));
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Note: mysqli strict errors enabled in DBConnection
?>
