<?php

namespace App\Model;

use app\core\Connect;

class Model_main
{
    public function createNewDb($dbname): void
    {
        Connect::createNewDb($dbname);
    }

    public function isDbCreated($dbname): bool
    {
        if (in_array($dbname, Connect::getAllDatabases())) {
            return true;
        }
        return false;
    }
}
