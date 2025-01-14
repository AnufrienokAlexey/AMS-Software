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

    public function get_data(): null
    {
        return null;
    }

    public function addCarBrands($carBrand)
    {
        Connect::addCarBrands(CONFIG['dbname'], $carBrand);
    }

}
