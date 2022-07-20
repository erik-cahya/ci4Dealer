<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\UserModel;
use App\Models\AccountModel;



class AdminPanel extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->productModel = new ProductModel();
        $this->accountModel = new AccountModel();

        helper(['number', 'text']);
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
            'dataUser' => $this->userModel->getUser(),
            'validation' => \Config\Services::validation(),
            'countUser' => $this->userModel->countUser()
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

    // Kendaraan

    public function list_kendaraan()
    {
        $data = [
            'title' => 'MotoShop Panel | List Motor',
            'permission' => "Admin Account",
            'validation' => \Config\Services::validation(),
            'countUser' => $this->userModel->countUser(),
            'dataUser' => $this->userModel->getUser(),
            'product' => $this->productModel->getProduct(),
            'countProduct' => $this->productModel->countProduct(),

        ];
        return view('adminPanel/list_kendaraan', $data);
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

    public function saveKendaraan()
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
            'detail_product' => $this->request->getVar('detailKendaraan'),
            'gambar_product' => $this->request->getVar('gambarKendaraan')
        ]);

        session()->setFlashData("pesan", "Data Kendaraan Berhasil Ditambahkan");

        return redirect()->to('/panel/list_kendaraan');
    }

    public function editKendaraan($id_product)
    {
        $data = [
            'title' => 'MotoShop Panel | Edit Data Kendaraan',
            'permission' => "Admin Account",
            'dataKendaraan' => $this->productModel->getProduct($id_product),
            'validation' => \Config\Services::validation()
        ];

        return view('/adminPanel/edit_kendaraan', $data);
    }

    public function updateKendaraan($id_product)
    {


        $this->productModel->save([
            'id_product' => $id_product,
            'nama_product' => $this->request->getVar('namaKendaraan'),
            'harga_product' => $this->request->getVar('hargaKendaraan'),
            'tahun' => $this->request->getVar('tahun'),
            'detail_product' => $this->request->getVar('detailKendaraan'),
            'gambar_product' => "p1.png"
        ]);

        session()->setFlashData('pesan', "Data Kendaraan Berhasil di Ubah");
        return redirect()->to('/panel/list_kendaraan');
    }

    public function deleteKendaraan($id_product)
    {
        $this->productModel->delete($id_product);
        session()->setFlashData('pesan', "Kendaran Berhasil di Hapus");
        return redirect()->to('panel/list_kendaraan');
    }

    // /* Kendaraan




    // User & Account

    public function delete($id)
    {
        $this->userModel->delete($id);
        session()->setFlashData('pesan', "User Berhasil di Hapus");
        return redirect()->to('panel/manage_account');
    }

    public function saveUser()
    {

        // Validation Form
        if (!$this->validate([
            'namaLengkap' => [
                'rules' => 'required|is_unique[tb_user.nama_user]',
                'errors' => [
                    'required' => 'Form Tidak Boleh Kosong',
                    'is_unique' => 'Nama Sudah Terdaftar'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Form Tidak Boleh Kosong',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/panel/manage_account')->withInput()->with('validation', $validation);
        }

        $this->userModel->save([
            'nama_user' => $this->request->getVar('namaLengkap'),
            'no_telepon' => $this->request->getVar('noTelepon'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'avatar' => $this->request->getVar('avatarUser')
        ]);

        $namaUser = $this->request->getVar('namaLengkap');
        $namaFromDatabase = $this->userModel->getUserNama($namaUser);

        if ($namaUser == $namaFromDatabase["nama_user"]) {

            $this->accountModel->save([
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
                'id_user' => $namaFromDatabase['id_user'],
                'level' => '1'
            ]);
            session()->setFlashData('pesan', "User Berhasil di Tambahkan");
            return redirect()->to('/panel/manage_account');
        }
    }

    public function editUser($id_user)
    {
        $data = [
            'title' => 'MotoShop Panel | Manage User Account',
            'permission' => "Admin Account",
            'dataUser' => $this->userModel->getUser($id_user),
            'validation' => \Config\Services::validation()
        ];

        return view('/adminPanel/edit_user', $data);
    }

    public function updateUser($id_user)
    {
        $this->userModel->save([
            'id_user' => $id_user,
            'nama_user' => $this->request->getVar('namaLengkap'),
            'no_telepon' => $this->request->getVar('noTelepon'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'avatar' => "1.png"
        ]);

        session()->setFlashData('pesan', "Data User Berhasil di Ubah");
        return redirect()->to('/panel/manage_account');
    }

    public function updateAccount($id_account)
    {
        $this->accountModel->save([
            'id_account' => $id_account,
            'id_user' => $this->request->getVar('id_user'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => "1"
        ]);
        session()->setFlashData('pesan', "Data User Berhasil di Ubah");
        return redirect()->to('/panel/manage_account');
    }
}
