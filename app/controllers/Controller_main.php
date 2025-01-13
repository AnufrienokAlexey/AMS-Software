<?php

use app\core\controller;

class controller_main extends controller
{
    function action_index(): void
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }
}