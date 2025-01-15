<?php

namespace app\core;

class View
{
    public function generate($content_view, $template_view, $data = null): void
    {
        if (is_file('app/views/' . $template_view)) {
            include 'app/views/' . $template_view;
        }
    }
}
