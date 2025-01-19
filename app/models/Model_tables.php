<?php

namespace App\Model;

use app\core\Connect;

class Model_tables
{
    public function getDataFromTable(): false|array
    {
        $tables = ['carBrands', 'carModels', 'workCosts'];
        $carBrands = Connect::getDataFromTable('carBrands');
        $carModels = Connect::getDataFromTable('carModels');
        $workCosts = Connect::getDataFromTable('workCosts');
        $values = [$carBrands, $carModels, $workCosts];

        return array_combine($tables, $values);
    }

    public function deleteIdInTable($table, $id): void
    {
        Connect::deleteId($table, $id);
    }
}
