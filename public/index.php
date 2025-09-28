<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode
if (file_exists(__DIR__ . '/../mpp_digital_apps/storage/framework/maintenance.php')) {
    require __DIR__ . '/../mpp_digital_apps/storage/framework/maintenance.php';
}

// Autoloader
require __DIR__ . '/../mpp_digital_apps/vendor/autoload.php';

// Bootstrap
$app = require_once __DIR__ . '/../mpp_digital_apps/bootstrap/app.php';

$app->handleRequest(Request::capture());
