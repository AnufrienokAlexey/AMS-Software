<?php

namespace app\core;

class Router
{
    public static function start(): void
    {
        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1]))
        {
            $controller_name = $routes[1];
        }

        if (!empty($routes[2]))
        {
            $action_name = $routes[2];
        }

        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;

        $model_file = strtolower($model_name) . '.php';
        $model_path = 'app/models/' . $model_file;

        if (file_exists($model_path))
        {
            include $model_path;
        }

        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = 'app/controllers/' . $controller_file;

        if (file_exists($controller_path))
        {
            include $controller_path;
        }
        else
        {
            Router::ErrorPage(404);
        }

        $controller = new $controller_name;
        $action = $action_name;

        if(method_exists($controller, $action))
        {
            $controller->$action();
        }
        else
        {
            Router::ErrorPage(404);
        }
    }

    public static function ErrorPage(int $status): void
    {
        http_response_code($status);
        header("HTTP/1.1 $status");
    }
}
