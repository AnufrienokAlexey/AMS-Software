<?php

$microTime = microtime(true);

require_once 'app/bootstrap.php';

dump(microtime(true) - $microTime);
