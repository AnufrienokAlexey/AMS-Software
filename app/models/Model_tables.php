<?php

namespace App\Model;

use app\core\Connect;

class Model_tables
{
    public function getDataFromTable(): false|array
    {
        $tables = ['carBrands', 'carModels', 'workCosts'];
        $carBrands = Connect::getDataFromTable(CONFIG['dbname'], 'carBrands');
        $carModels = Connect::getDataFromTable(CONFIG['dbname'], 'carModels');
        $workCosts = Connect::getDataFromTable(CONFIG['dbname'], 'workCosts');
        $values = [$carBrands, $carModels, $workCosts];

        return array_combine($tables, $values);
    }

    public function deleteIdInTable($table, $id): void
    {
        Connect::deleteId(CONFIG['dbname'], $table, $id);
    }
}
