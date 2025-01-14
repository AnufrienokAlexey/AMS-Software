<?php

use app\core\Connect;
use app\core\Controller;
use App\Model\Model_main;

class Controller_main extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_main();
        $data = $this->model->get_data();
        $this->view->generate(
            'main_view.php',
            'template_view.php',
            $data
        );
    }

    public function action_index(): void
    {
    }

    public function validateInput($str): string
    {
        return $str;
    }

    public function action_addCarBrands(): void
    {
        if (isset($_POST['carBrand'])) {
            $carBrand = $_POST['carBrand'];
            //$this->model->addCarBrands($carBrand);
        }
    }
}
