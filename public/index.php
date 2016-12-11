<?php

// load the system configuration
require_once('config/system.php');

// load the helper functions
require_once('framework/helpers.php');

// register the autoloaders
require_once('framework/autoloader.php');
require 'vendor/autoload.php';

// create a new instance of the app and bootstrap it
$app = new Core\App();
$app->bootstrap();

// load the routing
require_once('framework/routes.php');
