<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    public function dashboard()
    {
        $data = [
            'title' => 'MotoShop | Admin Panel Dashboard'
        ];

        return view('admin/dashboard', $data);
    }

    public function account()
    {
        $data = [
            'title' => 'MotoShop | Admin Panel Dashboard'
        ];

        return view('admin/account', $data);
    }
    public function manage_account()
    {
        $data = [
            'title' => 'MotoShop | Admin Panel Dashboard'
        ];

        return view('admin/manage_account', $data);
    }
    public function approval()
    {
        $data = [
            'title' => 'MotoShop | Admin Panel Dashboard'
        ];

        return view('admin/approval', $data);
    }
    public function list_motor()
    {
        $data = [
            'title' => 'MotoShop | Admin Panel Dashboard'
        ];

        return view('admin/list_motor', $data);
    }
}
