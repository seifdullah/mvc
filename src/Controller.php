<?php

namespace Seif;

class Controller
{
    protected View $template_engine;
    protected ?Model $model;

    public function __construct()
    {
        $this->template_engine = new View;
    }

    public function view($template, $data = [])
    {
        $this->template_engine->display($template, $data);
    }
}
