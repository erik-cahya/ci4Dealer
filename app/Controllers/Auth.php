<?php

namespace App\Controllers;

use App\Models\AccountModel;
use App\Models\UserModel;


class Auth extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->accountModel = new AccountModel();
    }


    public function index()
    {
        $data = [
            'title' => 'Motoshop | Login',
            'validation' => \Config\Services::validation()
        ];

        return view('authPages/login', $data);
    }

    public function login()
    {

        $inputUsername = $this->request->getVar('username');
        $inputPassword = $this->request->getVar('password');
        $dataAccount = $this->accountModel->getUsername($inputUsername);

        // initializing data dari database
        if ($dataAccount) {
            // cek username
            if ($inputUsername == $dataAccount["username"]) {
                // cek password
                if ($inputPassword == $dataAccount["password"]) {
                    $session = \Config\Services::session();
                    $session->set("usernameSession", $inputUsername,);
                    $session->set("levelSession", $dataAccount["level"],);
                    $session->set("namaUserSession", $dataAccount["nama_user"],);
                    $session->set("gambarUserSession", $dataAccount["avatar"],);
                    $session->set("idAccountSession", $dataAccount["id_account"],);

                    // cek user/admin | 0 : admin | 1-9 : user
                    if ($session->get("levelSession") == 0) {
                        return redirect()->to("admin/dashboard");
                    } else {
                        return redirect()->to("user/dashboard");
                    }
                } else {
                    dd("Password Salah");
                }
            }
        } else {
            dd("Username Salah");
        }
    }




    public function logout()
    {
        $data = [
            'title' => 'Motoshop | Login'
        ];

        session()->destroy();
        return view('authPages/login', $data);
    }


    public function register()
    {
        $data = [
            'title' => 'MotoShop | Register Account',
            'validation' => \Config\Services::validation()
        ];

        return view('authPages/register', $data);
    }

    public function saveAccount()
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
            'username' => [
                'rules' => 'required|is_unique[tb_account.username]',
                'errors' => [
                    'required' => 'Form Tidak Boleh Kosong',
                    'is_unique' => 'Username Sudah Terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Form Tidak Boleh Kosong',
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[tb_user.email]',
                'errors' => [
                    'required' => 'Form Tidak Boleh Kosong',
                    'is_unique' => 'Email Sudah Terdaftar'
                ]
            ],
            'noTelepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Form Tidak Boleh Kosong',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validation', $validation);
        }



        $this->userModel->save([
            'nama_user' => $this->request->getVar('namaLengkap'),
            'no_telepon' => $this->request->getVar('noTelepon'),
            'email' => $this->request->getVar('email'),
            'alamat' => NULL,
            'avatar' => 'avatar-default.png'
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
            return redirect()->to('/login');
        }
    }

    public function redirect()
    {
        // $account = "admin";

        // if ($account === "admin") {
        //     return redirect()->to("admin/dashboard");
        // } else {
        //     return redirect()->to("user/dashboard");
        // }
    }
}
