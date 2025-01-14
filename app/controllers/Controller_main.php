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
        if (isset($_POST['createDbByButton'])) {
            $_POST['isDbCreated'] = $this->createDbByButton(
                $this->validateInput($_POST['createDbByButton'])
            );
            unset($_POST['createDbByButton']);
        }
        $this->view->generate(
            'main_view.php',
            'template_view.php',
        );
    }

    public function createDbByButton($dbname): bool
    {
        $this->model->createNewDb($dbname);
        return $this->model->isDbCreated($dbname);
    }

    public function validateInput($str): string
    {
        return $str;
    }
}
