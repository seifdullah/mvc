<?php

namespace Seif;

// class App
// {
//     public function __construct()
//     {
//         $controller = isset($_GET['controller']) ? ucfirst(strtolower($_GET['controller'])) : "Home";

//         $controller_with_namespace = 'App\Controllers\\' . $controller;

//         if (class_exists($controller_with_namespace)) {
//             $obj = new $controller_with_namespace();
//         } else {
//             echo "class doesn't exist";
//         }

//         echo $controller_with_namespace;

//         $method = isset($_GET['method']) ? strtolower($_GET['method']) : "index";

//         if (method_exists($obj, $method)) {
//             $obj->$method();
//         } else {
//             echo "method doesn't exists";
//         }
//     }
// }

class App
{
    protected string $controller = 'home';
    protected string $controller_suffix = 'controller';
    protected string $method = 'index';

    public function __construct()
    {
        $this->run();
    }

    private function run()
    {
        // echo '<pre>';
        // print_r($_SERVER);
        $url = $this->parseUrl() ?? [];

        // echo 'URL: ';
        // print_r($url);

        $controller = !empty($url) ? ucfirst(strtolower($url[0])) : ucfirst(strtolower($this->controller));
        $controller_with_namespace = 'App\\Controllers\\' . $controller;

        if (!class_exists($controller_with_namespace)) {
            echo 'Class NOT found';
        }

        $controller_object = new $controller_with_namespace;
        // print_r($controller_object);

        $method = isset($url[1]) ? strtolower($url[1]) : strtolower($this->method);

        if (is_callable([$controller_object, $method])) {
            $controller_object->$method();
        } else {
            echo 'Method NOT found';
        }
    }

    protected function parseUrl()
    {
        if (isset($_SERVER)) {
            $unclean_url = $_SERVER['QUERY_STRING'] ?? $_SERVER['REQUEST_URI'];

            if ($unclean_url) {
                return explode(DS, filter_var(rtrim($unclean_url, DS), FILTER_SANITIZE_URL));
            } else {
                return null;
            }
        }
        return null;
    }
}
