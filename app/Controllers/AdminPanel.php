<?php

namespace App\Controllers;

class AdminPanel extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'MotoShop Panel | Login Panel'
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
            'title' => 'MotoShop Panel | Account'
        ];

        return view('adminPanel/account', $data);
    }
    public function manage_account()
    {
        $data = [
            'title' => 'MotoShop Panel | Manage User Account'
        ];

        return view('adminPanel/manage_account', $data);
    }
    public function approval()
    {
        $data = [
            'title' => 'MotoShop Panel | Form Approval'
        ];

        return view('adminPanel/approval', $data);
    }
    public function list_motor()
    {
        $data = [
            'title' => 'MotoShop Panel | List Motor'
        ];

        return view('adminPanel/list_motor', $data);
    }
}
