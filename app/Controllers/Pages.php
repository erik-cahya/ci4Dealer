<?php

namespace App\Controllers;

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
}
