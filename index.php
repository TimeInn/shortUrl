<?php
/**
 * KK Forum
 * A simple bulletin board system
 * Author: kookxiang <r18@ikk.me>
 */

// Initialize constants
define('ROOT_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('LIBRARY_PATH', ROOT_PATH.'Library/');
define('DATA_PATH', ROOT_PATH.'Data/');
@ini_set('display_errors', 'off');
@ini_set('expose_php', false);

// Register autoloader
require ROOT_PATH.'Package/autoload.php';

// Register error handler
Core\Error::registerHandler();

// Initialize config
@include DATA_PATH.'Config.php';

$defaultRouter = new \Core\Router();
$defaultRouter->handleRequest();
