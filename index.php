<?php

define('GREEN_ROOT', dirname(__FILE__).'/system');
define('APP_PATH',  dirname(__FILE__).'/app');

define('BASE_URL',  'http://'.dirname($_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']).'/?/');

define('DEFAULT_CONTROLLER', 'welcome');
define('DEFAULT_ACTION', 'index');


//  Init ---------------------------------------------------------------------

include 'config/config.php';
include GREEN_ROOT.'/Green.php';

// Get started!!
Green::dispatch();
