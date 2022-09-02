<?php

namespace App\Controllers;

use App\Models\UserModel;
use Seif\Controller;

class User extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new UserModel;
    }

    public function index()
    {
        // echo '<pre>';
        $users = $this->model->retrieve();
        // print_r($users);

        $this->view('user/index', $users);
    }

    public function add()
    {
        $this->view('user/add');
    }

    public function save()
    {
        // echo '<pre>';
        // print_r($_POST);

        if (isset($_POST)) {
            $data['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $data['address'] = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
            $data['location'] = filter_var($_POST['location'], FILTER_SANITIZE_STRING);
        }

        // print_r($data);
        // exit;

        if(!$this->model->create($data)) {
            echo 'Failed to add user';
        } else {
            header('Location: /user/index');
        }
    }
}
