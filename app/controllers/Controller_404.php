<?php

use app\core\Controller;

class Controller_404 extends Controller
{
    public function action_index(): void
    {
        $this->view->generate('404_view.php', 'template_view.php');
    }
}
