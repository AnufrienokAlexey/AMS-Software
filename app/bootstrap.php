<?php

use app\core\Router;

const APP = __DIR__;
define("CONFIG", require_once(APP . '/config/config.php'));

require_once APP . '/config/config.php';
require_once __DIR__ . '/../vendor/autoload.php';

Router::start();
