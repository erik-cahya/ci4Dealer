<?php

namespace App\Controllers;

use App\Models\AccountModel;
use App\Models\OrderModel;
use App\Models\ProductModel;
use App\Models\UserModel;

class Product extends BaseController
{

    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->userModel = new UserModel();
        $this->accountModel = new AccountModel();
        $this->orderModel = new OrderModel();
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

    public function detailProduct($id_product)
    {
        $data = [
            'title' => 'MotoShop | Detail Product',
            'product' => $this->productModel->getProduct($id_product)
        ];

        return view('/product/detail_product', $data);
    }

    public function order($id_product)
    {
        if (session()->get("idAccountSession") == null) {
            return redirect()->to('/login');
        } else {
            // GET data user berdasarkan session yang aktif
            $dataUser = $this->accountModel->getAccount(session()->get("idAccountSession"));
            // GET data produk
            $dataProduk = $this->productModel->getProduct($id_product);

            $this->orderModel->save([
                'id_product' => $dataProduk["id_product"],
                'id_user' => $dataUser["id_user"],
                'status_order' => 'pending'
            ]);
        }
    }



    /* ================================================================================================= 
    Admin Panel 
    =================================================================================================  */
}
