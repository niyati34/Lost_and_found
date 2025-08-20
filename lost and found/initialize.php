<?php
// Load optional local overrides without committing secrets (see config.local.php.sample)
$__local_cfg = __DIR__ . '/config.local.php';
if (file_exists($__local_cfg)) {
	require_once $__local_cfg;
}

// Base application path (filesystem)
if(!defined('base_app')) define('base_app', str_replace('\\\\','/',__DIR__).'/');

// Compute base URL if not provided by local config
if(!defined('base_url')){
	$is_https = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);
	$scheme = $is_https ? 'https' : 'http';
	$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
	// Attempt to detect base path relative to document root; fallback to known path
	$docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? str_replace('\\\\','/', rtrim($_SERVER['DOCUMENT_ROOT'],'/')) : '';
	$basePath = '/php-lfis/';
	if($docRoot && strpos(base_app, $docRoot) === 0){
		$basePath = rtrim(str_replace($docRoot, '', base_app),'/') . '/';
	}
	define('base_url', sprintf('%s://%s%s', $scheme, $host, $basePath));
}

// Database defaults (can be overridden via config.local.php)
if(!defined('DB_SERVER')) define('DB_SERVER',"localhost");
if(!defined('DB_USERNAME')) define('DB_USERNAME',"root");
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"");
if(!defined('DB_NAME')) define('DB_NAME',"lfis_db");
?>
