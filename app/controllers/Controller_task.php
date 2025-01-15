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
        $this->view->generate(
            'task_view.php',
            'template_view.php',
        );
    }
}
