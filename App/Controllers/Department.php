<?php

namespace App\Controllers;

use App\Models\DepartmentModel;
use Seif\Controller;

class Department extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new DepartmentModel;
    }

    public function index()
    {
        // echo '<pre>';
        $results = $this->model->retrieve();
        // print_r($results);

        $this->view('department/index', $results);
    }

    public function add()
    {
        $this->view('department/add');
    }

    public function save()
    {
        // echo '<pre>';
        // print_r($_POST);

        if (isset($_POST)) {
            $data['id'] = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
            $data['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            // $data['department'] = filter_var($_POST['department'], FILTER_SANITIZE_STRING);
            // $data['position'] = filter_var($_POST['position'], FILTER_SANITIZE_STRING);
        }



        // print_r($data);
        // exit;

        if (!$this->model->create($data)) {
            echo 'Failed to add department';
        } else {
            header('Location: /department/index');
        }
    }

    public function delete()
    {
        // print_r($_POST);
        if (isset($_POST['id'])) {

            $id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
        }
        
        $this->model->drop($id);


        // if ($this->model->drop($id)) {
        //     // echo 'Failed';
        //     header('Location: /department/index');
        // } else {
        //     echo 'Failed';
        // }
    }
}
