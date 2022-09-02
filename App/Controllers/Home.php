<?php

namespace App\Controllers;

use App\Models\UsersModel;
use Seif\Controller;

class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view('home/index');
    }

    public function about()
    {
        $this->view('home/about');
    }
}
