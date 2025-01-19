<?php

namespace App\Model;

use app\core\Connect;
use app\core\Model;

class Model_main extends Model
{

    public function addCarBrands($carBrand): void
    {
        $fields = "`id`, `carBrand`";
        $fieldsValue = "null, '$carBrand'";
        Connect::addToTable('carBrands', $fields, $fieldsValue);
    }

    public function addCarModels($carModel, $startDate, $endDate, $carImage, $carType): void
    {
        $fields = "`id`, `carModel`, `startDate`, `endDate`, `carImage`, `carType`";
        $fieldsValue = "null, '$carModel', '$startDate', '$endDate', '$carImage', '$carType'";
        Connect::addToTable('carModels', $fields, $fieldsValue);
    }

    public function addWorkCosts($workType, $workTime, $workCost): void
    {
        $fields = "`id`, `workType`, `workTime`, `workCost`";
        $fieldsValue = "null, '$workType', '$workTime', '$workCost'";
        Connect::addToTable('workCosts', $fields, $fieldsValue);
    }
}
