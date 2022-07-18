<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\UserModel;

class AdminPanel extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data = [
            'title' => 'MotoShop Panel | Login Panel',
            'permission' => "Admin Account"
        ];
        return view('adminPanel/login', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'MotoShop Panel | Dashboard',
            'permission' => "Admin Account",
            'dataUser' => $this->userModel->getUser(),
            'countProduct' => $this->productModel->countProduct(),
            'countUser' => $this->userModel->countUser()
        ];
        return view('adminPanel/dashboard', $data);
    }

    public function account()
    {
        $data = [
            'title' => 'MotoShop Panel | Account',
            'permission' => "Admin Account"
        ];

        return view('adminPanel/account', $data);
    }
    public function manage_account()
    {
        $data = [
            'title' => 'MotoShop Panel | Manage User Account',
            'permission' => "Admin Account",
            'dataUser' => $this->userModel->getUser()
        ];

        return view('adminPanel/manage_account', $data);
    }
    public function approval()
    {
        $data = [
            'title' => 'MotoShop Panel | Form Approval',
            'permission' => "Admin Account"
        ];

        return view('adminPanel/approval', $data);
    }
    public function list_motor()
    {
        $data = [
            'title' => 'MotoShop Panel | List Motor',
            'permission' => "Admin Account"
        ];

        return view('adminPanel/list_motor', $data);
    }

    public function tambah_kendaraan()
    {
        $data = [
            'title' => 'MotoShop Panel | Form Tambah Kendaraan',
            'permission' => "Admin Account",
            'validation' => \Config\Services::validation()
        ];

        return view('adminPanel/tambah_kendaraan', $data);
    }

    public function save()
    {
        // Validation Form
        if (!$this->validate([
            'hargaKendaraan' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Form Tidak Boleh Kosong',
                    'integer' => 'Harap Masukkan Angka'
                ]
            ],
            'tahunKendaraan' => [
                'rules' => 'required|integer|min_length[4]',
                'errors' => [
                    'required' => 'Form Tidak Boleh Kosong',
                    'integer' => 'Harap Masukkan Angka',
                    'min_length' => 'Value yang diinputkan setidaknya 4 digit'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/panel/tambah_kendaraan')->withInput()->with('validation', $validation);
        }

        $this->productModel->save([
            'nama_product' => $this->request->getVar('namaKendaraan'),
            'harga_product' => $this->request->getVar('hargaKendaraan'),
            'tahun' => $this->request->getVar('tahunKendaraan'),
            'id_user' => '1',
            'detail_kendaraan' => $this->request->getVar('detailKendaraan'),
            'gambar_product' => $this->request->getVar('gambarKendaraan')
        ]);

        // toast message
        session()->setFlashData("pesan", "Data Kendaraan Berhasil Ditambahkan");

        return redirect()->to('/panel/tambah_kendaraan');
    }
}
