<?php

namespace App\Controllers;

use App\Models\AccountModel;


class Auth extends BaseController
{

    public function __construct()
    {
        $this->accountModel = new AccountModel();
    }


    public function index()
    {
        $data = [
            'title' => 'Motoshop | Login',
            'validation' => \Config\Services::validation()
        ];

        return view('pages/login', $data);
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

                    if ($session->get("levelSession") == 1) {
                        return redirect()->to("user/dashboard");
                    } else {
                        return redirect()->to("admin/dashboard");
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
        return view('pages/login', $data);
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
