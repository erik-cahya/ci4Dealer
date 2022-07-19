<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $useTimestamps = true;

    protected $allowedFields = ['nama_user', 'no_telepon', 'email', 'alamat', 'avatar'];

    public function getUser($id_user = false)
    {
        if ($id_user == false) {
            return $this->join('tb_account', 'tb_user.id_user = tb_account.id_user')->findAll();
        }
        return $this->join('tb_account', 'tb_user.id_user = tb_account.id_user')->where(['tb_account.id_user' => $id_user])->first();
    }

    public function getUserNama($nama_user)
    {
        return $this->where(['nama_user' => $nama_user])->first();
    }

    public function countUser()
    {
        return $this->countAllResults();
    }
}
