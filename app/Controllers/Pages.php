<?php

namespace App\Controllers;

use CodeIgniter\View\ViewDecoratorInterface;

class Pages extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'MotoShop | Dashboard'
        ];
        return view('/pages/dashboard', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'MotoShop | About'
        ];
        return view('/pages/about', $data);
    }

    public function login() 
    {
        $data = [
            'title' => 'Motoshop | Login'
        ];

        return view('pages/login', $data);
    }

    public function penjualan()
    {
        $data = [
            'title' => 'MotoShop | Form Penjualan'
        ];

        return view('pages/formPenjualan', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'MotoShop | Register Account'
        ];

        return view('pages/register', $data);
    }
}
