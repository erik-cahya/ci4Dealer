<?php

namespace App\Controllers;

class UserPanel extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'MotoShop Panel | Login Panel'
        ];
        return view('userPanel/index', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'MotoShop Panel | Dashboard',
            'permission' => "User Account"
        ];
        return view('userPanel/dashboard', $data);
    }
}
