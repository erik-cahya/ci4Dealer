<?php

namespace App\Controllers;

class UserPanel extends BaseController
{

    public function __construct()
    {
        if (session()->get('levelSession') == null || session()->get('levelSession') == 0) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

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

    public function penjualan()
    {
        $data = [
            'title' => 'MotoShop Panel | Form Pengajuan',
            'permission' => "User Account"
        ];
        return view('userPanel/form_penjualan', $data);
    }

    public function list_kendaraan()
    {
        $data = [
            'title' => 'MotoShop Panel | List Kendaraan',
            'permission' => "User Account"
        ];
        return view('userPanel/list_kendaraan', $data);
    }

    public function account()
    {
        $data = [
            'title' => 'MotoShop Panel | My Account',
            'permission' => "User Account"
        ];
        return view('userPanel/account', $data);
    }
}
