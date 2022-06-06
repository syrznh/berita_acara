<?php

namespace App\Controllers;

use App\Models\UsersModel;

class UsersController extends BaseController
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }

    public function index()
    {
        $data = [
            'users' => $this->UsersModel->get_users()
        ];

        return view('dashboard/pages/user/index', $data);
    }

    public function create()
    {
        return view('dashboard/pages/user/create');
    }
}
