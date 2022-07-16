<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{

    protected $productModel;
    public function __construct()
    {
        $this->productModel = new productModel();
        helper('number');
    }

    public function index()
    {
        $data = [
            'title' => 'MotoShop | Product',
            'product' => $this->productModel->getProduct()
        ];

        return view('/product/product', $data);
    }
}
