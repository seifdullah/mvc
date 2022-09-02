<?php

namespace App\Models;

use Seif\Model;

class DepartmentModel extends Model
{
    public function __construct()
    {
        parent::__construct('department');
    }

    public function save()
    {
        // echo '<pre>';
        // print_r($_POST);
        
        if (isset($_POST)) {
            $data['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $data['gender'] = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
            $data['department'] = filter_var($_POST['department'], FILTER_SANITIZE_STRING);
            $data['position'] = filter_var($_POST['position'], FILTER_SANITIZE_STRING);
        }

        // print_r($data);
        // exit;

        if(!$this->create($data)) {
            echo 'Failed to add department member';
        } else {
            header("Location: /department/index");
        }
    }
}
