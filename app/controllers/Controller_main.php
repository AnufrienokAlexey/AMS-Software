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
            $this->model->addCarBrands($_POST['carBrand']);
        }
    }

    public function action_addCarModels(): void
    {
        if (isset($_FILES["carImage"])) {
            dump($_FILES);
            if ($_FILES["carImage"]["error"] == UPLOAD_ERR_OK) {
                $name = basename($_FILES["carImage"]["name"]);
                move_uploaded_file($_FILES["carImage"]["tmp_name"], APP . '/uploads/' . $name);
            }
        }
        if (isset($_POST['carModel'])
            && isset($_POST['startDate'])
            && isset($_POST['endDate'])
            && isset($_POST['carImage'])
            && isset($_POST['carType'])) {
            $this->model->addCarModels(
                $_POST['carModel'],
                $_POST['startDate'],
                $_POST['endDate'],
                $_POST['carImage'],
                $_POST['carType']
            );
        }
    }

    public function action_addWorkCosts(): void
    {
        if (isset($_POST['workType'])
            && isset($_POST['workTime'])
            && isset($_POST['workCost'])) {
            $this->model->addWorkCosts(
                $_POST['workType'],
                $_POST['workTime'],
                $_POST['workCost']
            );
        }
    }
}
