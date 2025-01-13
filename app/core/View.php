<?php

class View
{
    function generate($content_view, $template_view, $data = null, $users = null): void
    {
        if (is_file('app/views/' . $template_view)) {
            include 'app/views/' . $template_view;
        }

        dump($data);
    }
}
