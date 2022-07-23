<?php

namespace App\Controllers;


class LandingPages extends BaseController
{


    public function dashboard()
    {
        $data = [
            'title' => 'MotoShop | Dashboard'
        ];

        // return redirect()->to('/panel/penjualan');

        return view('/landingPages/dashboard', $data);
    }
}
