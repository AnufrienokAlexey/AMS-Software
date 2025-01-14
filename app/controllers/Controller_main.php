<?php

use app\core\Connect;
use app\core\Controller;

class Controller_main extends Controller
{
    public function action_index(): void
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }
}
