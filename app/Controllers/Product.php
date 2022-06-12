<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'MotoShop | Product'
        ];
        return view('/product/index', $data);
    }
}
