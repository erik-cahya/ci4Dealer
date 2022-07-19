<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table = 'tb_account';
    protected $primaryKey = 'id_account';
    protected $useTimestamps = true;

    protected $allowedFields = ['username', 'password', 'id_user', 'level'];
}
