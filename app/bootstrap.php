<?php

use app\core\Router;
use app\core\Connect;

spl_autoload_register();

define("CONFIG", require_once(__DIR__ . '/config/config.php'));

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/../vendor/autoload.php';

Router::start();
//Connect::connect();
