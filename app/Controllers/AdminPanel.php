<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminPanel extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'MotoShop Panel | Login Panel',
            'permission' => "Admin Account"
        ];
        return view('adminPanel/login', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'MotoShop Panel | Dashboard',
            'permission' => "Admin Account"
        ];

        return view('adminPanel/dashboard', $data);
    }

    public function account()
    {
        $data = [
            'title' => 'MotoShop Panel | Account',
            'permission' => "Admin Account"
        ];

        return view('adminPanel/account', $data);
    }
    public function manage_account()
    {
        $data = [
            'title' => 'MotoShop Panel | Manage User Account',
            'permission' => "Admin Account",
            'dataUser' => $this->userModel->getUser()
        ];

        return view('adminPanel/manage_account', $data);
    }
    public function approval()
    {
        $data = [
            'title' => 'MotoShop Panel | Form Approval',
            'permission' => "Admin Account"
        ];

        return view('adminPanel/approval', $data);
    }
    public function list_motor()
    {
        $data = [
            'title' => 'MotoShop Panel | List Motor',
            'permission' => "Admin Account"
        ];

        return view('adminPanel/list_motor', $data);
    }
}
