<?php

namespace App\Model;

use app\core\Connect;

class Model_task
{
    public function task1(): false|array
    {
        return Connect::task1(CONFIG['dbname']);
    }
}
