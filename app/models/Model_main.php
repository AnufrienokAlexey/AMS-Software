<?php

namespace App\Model;

use app\core\Db;
use PDO;

class Model_main
{
    public function get_data(): array
    {
        return array(
            array(
                'Year' => '2018',
                'Site' => 'https://yanfit.ru',
                'Description' => 'Интернет-магазин на opencart'
            ),
            array(
                'Year' => '2019',
                'Site' => 'https://yanmart.ru',
                'Description' => 'Интернет-магазин на opencart'
            ),
        );
    }

    public function get_users(): array
    {
        $conn = Db::getDatabase()->prepare("SELECT * FROM `users` WHERE `id` = 1");
        $conn->execute();
        return $conn->fetch(PDO::FETCH_ASSOC);
    }
}
