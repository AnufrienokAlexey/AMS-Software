<?php

namespace App\Model;

use app\core\Connect;

class Model_task
{
    public function task(): false|array
    {
        $res1 = Connect::task1(CONFIG['dbname']);
        $res2 = Connect::task2(CONFIG['dbname']);
        $res3 = Connect::task3(CONFIG['dbname']);
        return array($res1, $res2, $res3);
    }

    public function importTableToDb(): void
    {
        Connect::importTableToDb(CONFIG['dbname'], 'cars', 'cars.sql');
    }

    public function deleteCars(): void
    {
        Connect::deleteTable('cars');
    }
}
