<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'ochqoegwxklc',
  'passwordsalt' => 'L021tvLo2A6bGJz0L1pVLlt5QJpuau',
  'secret' => 'FGY7ckHikGEyemsHjd8ZNbNE++XOI5Dj54u0yQU0V0Mx1WiG',
  'trusted_domains' => 
  array (
    0 => 'localhost:8080',
    1 => 'angelo.tail0142bc.ts.net',
    2 => '100.93.249.12',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '31.0.8.1',
  'overwrite.cli.url' => 'https://angelo.tail0142bc.ts.net',  // Changed to https and external URL
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'nextcloud',
  'installed' => true,

  // Added settings for reverse proxy and HTTPS
  'trusted_proxies' => ['100.93.249.12'],  // Your Windows machine's Tailscale IP
  'forwarded_for_headers' => ['HTTP_X_FORWARDED_FOR', 'HTTP_X_REAL_IP'],
  'overwriteprotocol' => 'https',
  'overwritehost' => 'angelo.tail0142bc.ts.net',
  'overwritewebroot' => '',
);
