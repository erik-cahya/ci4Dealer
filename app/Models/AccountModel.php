<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table = 'tb_account';
    protected $primaryKey = 'id_account';
    protected $useTimestamps = true;

    protected $allowedFields = ['username', 'password', 'id_user', 'level'];


    public function getAccount($id_account = false)
    {
        if ($id_account == false) {
            return $this->join('tb_user', 'tb_account.id_user = tb_user.id_user')->findAll();
        }
        return $this->join('tb_user', 'tb_account.id_user = tb_user.id_user')->where(['tb_account.id_user' => $id_account])->first();
    }

    public function getUsername($username)
    {
        return $this->join('tb_user', 'tb_account.id_user = tb_user.id_user')->where(['username' => $username])->first();
    }

    public function getPassword($password)
    {
        return $this->where(['password' => $password])->first();
    }
}
