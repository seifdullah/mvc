<?php

namespace App\Models;

use Seif\Model;

class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct('user');
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

        if(!$this->create($data)) {
            echo 'Failed to add user';
        } else {
            header("Location: /user/index");
        }
    }
}
