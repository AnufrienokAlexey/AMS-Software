<?php

$microTime = microtime(true);

require_once __DIR__ . '/app/bootstrap.php';

dump(microtime(true) - $microTime);
