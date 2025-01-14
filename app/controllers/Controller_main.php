<?php

use app\core\Controller;
use App\Model\Model_main;

class Controller_main extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_main();
    }

    public function action_index(): void
    {
        $data = $this->model->get_data();
        $this->view->generate(
            'main_view.php',
            'template_view.php',
            $data
        );
    }

    public function validateInput($str): string
    {
        return $str;
    }
}
