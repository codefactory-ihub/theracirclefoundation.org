<?php

// Load Laravel's bootstrap file
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';

// Run the migration command
$artisan = app('Illuminate\Contracts\Console\Kernel');
$status = $artisan->call('migrate');

echo "Migration completed with status code: $status\n";
