<?php

namespace App\Model;

use app\core\Connect;

class Model_task
{
    public function task1(): false|array
    {
        return Connect::task1(CONFIG['dbname']);
    }

    public function getDataFromTable(): false|array
    {
        return Connect::getDataFromTable(CONFIG['dbname'], 'cars');
    }

    public function createCars(): void
    {
        $tableParams = 'carBrand varchar(30), 
					carModel varchar(30));';
        Connect::createNewTable('cars', $tableParams);
    }

    public function deleteCars(): void
    {
        Connect::deleteTable('cars');
    }
}
