<?php

namespace App\Controllers;


class Pages extends BaseController
{


    public function dashboard()
    {
        $data = [
            'title' => 'MotoShop | Dashboard'
        ];

        // return redirect()->to('/panel/penjualan');

        return view('/pages/dashboard', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'MotoShop | About'
        ];
        return view('/pages/about', $data);
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
