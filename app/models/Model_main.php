<?php

namespace App\Model;

use app\core\Connect;
use app\core\Model;

class Model_main extends Model
{
    public function __construct()
    {
        $tableParams = 'carBrand varchar(30));';
        Connect::createNewTable('carBrands', $tableParams);

        $tableParams = 'carModel varchar(30), 
					startDate varchar(30), 
					endDate varchar(30), 
					carImage varchar(30), 
					carType varchar(30));';
        Connect::createNewTable('carModels', $tableParams);

        $tableParams = 'workType varchar(30), 
					workTime varchar(30), 
					workCost varchar(30));';
        Connect::createNewTable('workCosts', $tableParams);
    }

    public function addCarBrands($carBrand): void
    {
        $fields = "`id`, `carBrand`";
        $fieldsValue = "null, '$carBrand'";
        Connect::addToTable(CONFIG['dbname'], 'carBrands', $fields, $fieldsValue);
    }

    public function addCarModels($carModel, $startDate, $endDate, $carImage, $carType): void
    {
        $fields = "`id`, `carModel`, `startDate`, `endDate`, `carImage`, `carType`";
        $fieldsValue = "null, '$carModel', '$startDate', '$endDate', '$carImage', '$carType'";
        Connect::addToTable(CONFIG['dbname'], 'carModels', $fields, $fieldsValue);
    }

    public function addWorkCosts($workType, $workTime, $workCost): void
    {
        $fields = "`id`, `workType`, `workTime`, `workCost`";
        $fieldsValue = "null, '$workType', '$workTime', '$workCost'";
        Connect::addToTable(CONFIG['dbname'], 'workCosts', $fields, $fieldsValue);
    }
}
