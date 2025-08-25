<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'redis' => 
  array (
    'host' => 'localhost',
    'port' => 6379,
  ),
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
  'overwrite.cli.url' => 'https://angelo.tail0142bc.ts.net',
  'default_phone_region' => 'PH',
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '31.0.8.1',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'nextcloud',
  'installed' => true,
  'trusted_proxies' => 
  array (
    0 => '100.93.249.12',
  ),
  'forwarded_for_headers' => 
  array (
    0 => 'HTTP_X_FORWARDED_FOR',
    1 => 'HTTP_X_REAL_IP',
  ),
  'overwriteprotocol' => 'https',
  'overwritehost' => 'angelo.tail0142bc.ts.net',
  'overwritewebroot' => '',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'maintenance_window_start' => 3,
  'maintenance_window_duration' => 120,
  'maintenance' => false,

  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_from_address' => 'hilarioangelo569',
  'mail_domain' => 'gmail.com',
  'mail_smtphost' => 'smtp.gmail.com',
  'mail_smtpport' => 587,
  'mail_smtpsecure' => 'tls',   // <-- IMPORTANT: use 'tls' with port 587
  'mail_smtpauth' => 1,
  'mail_smtpname' => 'hilarioangelo569@gmail.com',
  'mail_smtppassword' => 'fxhu bloy tkmf stms',   // <-- your app password
  'mail_smtptimeout' => 30,   // <-- optional but helps with Gmail
);
