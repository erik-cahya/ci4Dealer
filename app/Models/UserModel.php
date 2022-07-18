<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $useTimeStamps = true;

    public function getUser($id_user = false)
    {
        if ($id_user == false) {
            return $this->join('tb_account', 'tb_user.id_user = tb_account.id_user')->findAll();
        }
        return $this->where(['id_user' => $id_user])->first();
    }

    public function countUser()
    {
        return $this->countAllResults();
    }
}
