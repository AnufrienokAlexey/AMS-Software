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

    public function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate(
            'tables_view.php',
            'template_view.php',
            $data
        );
    }
}
