<?php

use app\core\Controller;
use App\Model\Model_tables;

class Controller_tables extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_tables();
    }

    public function action_index(): void
    {
        $data = $this->model->getDataFromTable();
        $this->view->generate(
            'tables_view.php',
            'template_view.php',
            $data
        );
    }

    public function action_deleteCarBrands(): void
    {
        if (isset($_POST['id'])) {
            $this->model->deleteIdInTable('carBrands', $_POST['id']);
        }
        header('Location: /tables');
    }

    public function action_deleteCarModels(): void
    {
        if (isset($_POST['id'])) {
            $this->model->deleteIdInTable('carModels', $_POST['id']);
        }
        header('Location: /tables');
    }

    public function action_deleteWorkCosts(): void
    {
        if (isset($_POST['id'])) {
            $this->model->deleteIdInTable('workCosts', $_POST['id']);
        }
        header('Location: /tables');
    }
}
