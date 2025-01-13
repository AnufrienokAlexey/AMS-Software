<?php

class controller_404 extends Controller
{
    function action_index(): void
    {
        $this->view->generate('404_view.php', 'template_view.php');
    }
}