<?php

use app\core\Controller;
use App\Model\Model_task;

class Controller_task extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_task();
    }

    public function action_index(): void
    {
        $data = $this->model->task1();
        $this->view->generate(
            'task_view.php',
            'template_view.php',
            $data
        );
    }

    public function action_createCars(): void
    {
        $this->model->importTableToDb();
        header('Location: /task');
    }

    public function action_deleteCars(): void
    {
        $this->model->deleteCars();
        header('Location: /task');
    }
}
