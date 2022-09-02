<?php

namespace Seif;

class View
{

    public function display($template, $data = [])
    {
        $file = VIEW_PATH . $template . ".php";
        // echo '<pre>';
        // print_r($data);
        // exit;

        if (file_exists($file)) {
            require_once $file;
        } else {
            echo "File doesn't exists";
        }
    }
}
