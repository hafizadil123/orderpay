<?php return array (
  'app' => 
  array (
    'name' => 'OrderPay',
    'env' => 'development',
    'debug' => true,
    'url' => 'http://localhost/order-pay',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:SO141NSSQNfosm8W2kg9l6tgPA0ccDiUPjWz1djMnXk=',
    'cipher' => 'AES-256-CBC',
    'log' => 'single',
    'log_level' => 'debug',
    'providers' => 
    array (
      0 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      1 => 'Illuminate\\Bus\\BusServiceProvider',
      2 => 'Illuminate\\Cache\\CacheServiceProvider',
      3 => 'Illuminate\\Cookie\\CookieServiceProvider',
      4 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      5 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      6 => 'Illuminate\\Hashing\\HashServiceProvider',
      7 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      8 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      9 => 'Illuminate\\Queue\\QueueServiceProvider',
      10 => 'Illuminate\\Redis\\RedisServiceProvider',
      11 => 'Illuminate\\Session\\SessionServiceProvider',
      12 => 'Illuminate\\Validation\\ValidationServiceProvider',
      13 => 'Illuminate\\View\\ViewServiceProvider',
      14 => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      15 => 'Igniter\\Flame\\Database\\DatabaseServiceProvider',
      16 => 'Igniter\\Flame\\Filesystem\\FilesystemServiceProvider',
      17 => 'Igniter\\Flame\\Flash\\FlashServiceProvider',
      18 => 'Igniter\\Flame\\Html\\HtmlServiceProvider',
      19 => 'Igniter\\Flame\\Mail\\MailServiceProvider',
      20 => 'Igniter\\Flame\\Notifications\\NotificationServiceProvider',
      21 => 'Igniter\\Flame\\Scaffold\\ScaffoldServiceProvider',
      22 => 'Igniter\\Flame\\Setting\\SettingServiceProvider',
      23 => 'System\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'Input' => 'Illuminate\\Support\\Facades\\Input',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Assets' => 'System\\Facades\\Assets',
      'Country' => 'System\\Facades\\Country',
      'File' => 'Igniter\\Flame\\Support\\Facades\\File',
      'Flash' => 'Igniter\\Flame\\Flash\\Facades\\Flash',
      'Form' => 'Igniter\\Flame\\Html\\FormFacade',
      'Html' => 'Igniter\\Flame\\Html\\HtmlFacade',
      'Model' => 'Igniter\\Flame\\Database\\Model',
      'Parameter' => 'Igniter\\Flame\\Setting\\Facades\\Parameter',
      'Setting' => 'Igniter\\Flame\\Setting\\Facades\\Setting',
      'Str' => 'Igniter\\Flame\\Support\\StrHelper',
      'Admin' => 'Admin\\Facades\\Admin',
      'AdminMenu' => 'Admin\\Facades\\AdminMenu',
      'AdminAuth' => 'Admin\\Facades\\AdminAuth',
      'Auth' => 'Main\\Facades\\Auth',
      'Template' => 'Admin\\Facades\\Template',
      'SystemException' => 'Igniter\\Flame\\Exception\\SystemException',
      'ApplicationException' => 'Igniter\\Flame\\Exception\\ApplicationException',
      'AjaxException' => 'Igniter\\Flame\\Exception\\AjaxException',
      'ValidationException' => 'Igniter\\Flame\\Exception\\ValidationException',
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'null',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\xampp\\htdocs\\order-pay\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'ordepay_cache',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'storage/database.sqlite',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'chanis-order-pay',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => 'orderPay_',
        'strict' => false,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => 5432,
        'database' => 'database',
        'username' => 'username',
        'password' => '\'\'',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => 'localhost',
        'port' => 1433,
        'database' => 'database',
        'username' => 'username',
        'password' => 'password',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => 6379,
        'database' => 0,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\order-pay\\storage\\app',
      ),
      'media' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\order-pay/assets\\media',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\order-pay\\storage\\app/public',
        'url' => '/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.mailgun.org',
    'port' => 587,
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'encryption' => 'tls',
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\order-pay\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\xampp\\htdocs\\order-pay\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'orderpay_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'system' => 
  array (
    'defaultTheme' => 'demo',
    'adminUri' => '/admin',
    'themesDir' => '/themes',
    'assetsDir' => '/assets',
    'modules' => 
    array (
      0 => 'System',
      1 => 'Admin',
      2 => 'Main',
    ),
    'enableRoutesCache' => false,
    'urlMapCacheTtl' => 10,
    'parsedTemplateCacheTTL' => 10,
    'parsedTemplateCachePath' => 'C:\\xampp\\htdocs\\order-pay\\storage\\system/cache',
    'assets' => 
    array (
      'media' => 
      array (
        'disk' => 'media',
        'folder' => 'uploads',
        'path' => '/assets/media/uploads',
      ),
      'attachment' => 
      array (
        'disk' => 'media',
        'folder' => 'attachments',
        'path' => '/assets/media/attachments',
      ),
    ),
    'assetsCombinerUri' => '/_assets',
    'filePermissions' => '777',
    'folderPermissions' => '777',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\xampp\\htdocs\\order-pay\\views',
    ),
    'compiled' => 'C:\\xampp\\htdocs\\order-pay\\storage\\framework\\views',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'currency' => 
  array (
    'default' => 'USD',
    'api_key' => '',
    'driver' => 'database',
    'cache_driver' => NULL,
    'drivers' => 
    array (
      'database' => 
      array (
        'class' => 'Igniter\\Flame\\Currency\\Drivers\\Database',
        'connection' => NULL,
        'table' => 'currencies',
      ),
      'filesystem' => 
      array (
        'class' => 'Igniter\\Flame\\Currency\\Drivers\\Filesystem',
        'disk' => NULL,
        'path' => 'currencies.json',
      ),
    ),
    'formatter' => NULL,
    'formatters' => 
    array (
      'php_intl' => 
      array (
        'class' => 'Igniter\\Flame\\Currency\\Formatters\\PHPIntl',
      ),
    ),
  ),
  'geocoder' => 
  array (
    'default' => 'chain',
    'providers' => 
    array (
      'google' => 
      array (
        'endpoints' => 
        array (
          'geocode' => 'https://maps.googleapis.com/maps/api/geocode/json?address=%s',
          'reverse' => 'https://maps.googleapis.com/maps/api/geocode/json?latlng=%F,%F',
        ),
        'locale' => 'en-GB',
        'region' => 'GB',
        'apiKey' => NULL,
      ),
      'nominatim' => 
      array (
        'endpoints' => 
        array (
          'geocode' => 'https://nominatim.openstreetmap.org/search?q=%s&format=json&addressdetails=1&limit=%d',
          'reverse' => 'https://nominatim.openstreetmap.org/reverse?format=json&lat=%F&lon=%F&addressdetails=1&zoom=%d',
        ),
        'locale' => 'en-GB',
        'region' => 'GB',
      ),
    ),
    'cache' => 
    array (
      'store' => NULL,
      'duration' => 4320,
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => 
    array (
      0 => '192.168.1.10',
    ),
    'headers' => 
    array (
      1 => 'FORWARDED',
      2 => 'X_FORWARDED_FOR',
      4 => 'X_FORWARDED_HOST',
      8 => 'X_FORWARDED_PROTO',
      16 => 'X_FORWARDED_PORT',
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
    ),
  ),
);
