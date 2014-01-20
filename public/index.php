<?php

define('BASE', realpath('..'));
define('APPLICATION_PATH', BASE.DIRECTORY_SEPARATOR.'app');
define('VENDOR_PATH', BASE.DIRECTORY_SEPARATOR.'vendor');
define('SYSTEM_PATH', BASE.DIRECTORY_SEPARATOR.'system');

//Require the file to initialize the project
require_once APPLICATION_PATH.'/bootstrap/application.php';

//Create new application instance
$app = new \app\bootstrap\application();

//Run the system!
$app->run();